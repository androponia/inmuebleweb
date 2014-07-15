<?php

/**
 * This is the model class for table "visitas".
 *
 * The followings are the available columns in table 'visitas':
 * @property integer $idvisitas
 * @property string $fecha
 * @property string $hora
 * @property string $nombrecompleto
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property integer $idpropiedad
 * @property integer $idempleado
 * @property string $created_date
 * @property string $modified_date
 * @property string $created_by
 * @property string $modified_by
 */
class Visitas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, hora, nombrecompleto, telefono, email, idpropiedad, idempleado', 'required'),
			array('idpropiedad, idempleado', 'numerical', 'integerOnly'=>true),
			array('hora', 'length', 'max'=>5),
			array('nombrecompleto, email', 'length', 'max'=>60),
			array('telefono, celular', 'length', 'max'=>45),
			array('created_by, modified_by', 'length', 'max'=>128),
			array('created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idvisitas, fecha, hora, nombrecompleto, telefono, celular, email, idpropiedad, idempleado, created_date, modified_date, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'idvisitas' => 'Codigo',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'nombrecompleto' => 'Nombre Cliente',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'idpropiedad' => 'Propiedad',
			'idempleado' => 'Empleado',
			'created_date' => 'Fecha Creacion',
			'modified_date' => 'Fecha Modificacion',
			'created_by' => 'Usuario Creo',
			'modified_by' => 'Usuario Modifico',
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

		$criteria->compare('idvisitas',$this->idvisitas);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('nombrecompleto',$this->nombrecompleto,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('idpropiedad',$this->idpropiedad);
		$criteria->compare('idempleado',$this->idempleado);
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
	 * @return Visitas the static model class
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
