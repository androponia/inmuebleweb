<?php

/**
 * This is the model class for table "destacado".
 *
 * The followings are the available columns in table 'destacado':
 * @property integer $iddestacado
 * @property string $fechainicio
 * @property string $fechafin
 * @property integer $idpropiedad
 * @property string $created_date
 * @property string $modified_date
 * @property string $created_by
 * @property string $modified_by
 */
class Destacado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'destacado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechainicio, fechafin, idpropiedad', 'required'),
			array('idpropiedad', 'numerical', 'integerOnly'=>true),
			array('created_by, modified_by', 'length', 'max'=>128),
			array('created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddestacado, fechainicio, fechafin, idpropiedad, created_date, modified_date, created_by, modified_by', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddestacado' => 'Codigo',
			'fechainicio' => 'Fecha Inicio',
			'fechafin' => 'Fecha Fin',
			'idpropiedad' => 'Propiedad',
			'created_date' => 'Fecha Creacio',
			'modified_date' => 'Fecha Modificacion',
			'created_by' => 'Usuario que Creo',
			'modified_by' => 'Usuario que Modifico',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('iddestacado',$this->iddestacado);
		$criteria->compare('fechainicio',$this->fechainicio,true);
		$criteria->compare('fechafin',$this->fechafin,true);
		$criteria->compare('idpropiedad',$this->idpropiedad);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Destacado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
	{
		return array(
			'CTimestampBehavior' => array(
			'class' => 'zii.behaviors.CTimestampBehavior',
			'createAttribute' => 'created_date',
			'updateAttribute' => 'modified_date',
			'setUpdateOnCreate' => true,
		),
			'BlameableBehavior' => array(
			'class' => 'application.components.behaviors.BlameableBehavior',
			'createdByColumn' => 'created_by',
			'updatedByColumn' => 'modified_by',
			),
		);
	}

}
