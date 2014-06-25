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
 *
 * The followings are the available model relations:
 * @property Propiedad $idpropiedad0
 */
class Destacado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Destacado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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
			// Please remove those attributes that should not be searched.
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
			'idpropiedad0' => array(self::BELONGS_TO, 'Propiedad', 'idpropiedad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddestacado' => 'Iddestacado',
			'fechainicio' => 'Fechainicio',
			'fechafin' => 'Fechafin',
			'idpropiedad' => 'Idpropiedad',
			'created_date' => 'Created Date',
			'modified_date' => 'Modified Date',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

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