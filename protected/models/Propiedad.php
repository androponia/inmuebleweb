<?php

/**
 * This is the model class for table "propiedad".
 *
 * The followings are the available columns in table 'propiedad':
 * @property integer $idpropiedad
 * @property integer $canthab
 * @property integer $cantbano
 * @property integer $terreno
 * @property integer $construido
 * @property integer $garage
 * @property integer $jardin
 * @property integer $fondo
 * @property double $precio
 * @property string $descripcion
 * @property string $ingreso
 * @property string $egreso
 * @property integer $clienteid
 * @property integer $empleadoid
 * @property string $created_date
 * @property string $modified_date
 * @property string $created_by
 * @property string $modified_by
 */
class Propiedad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'propiedad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('canthab, cantbano, precio, descripcion, ingreso, clienteid', 'required'),
			array('canthab, cantbano, terreno, construido, garage, jardin, fondo, clienteid, empleadoid', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('descripcion', 'length', 'max'=>150),
			array('created_by, modified_by', 'length', 'max'=>128),
			array('egreso, created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpropiedad, canthab, cantbano, terreno, construido, garage, jardin, fondo, precio, descripcion, ingreso, egreso, clienteid, empleadoid, created_date, modified_date, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'idpropiedad' => 'Codigo',
			'canthab' => 'Cantidad de Habitaciones',
			'cantbano' => 'Cantidad de Baños',
			'terreno' => 'Terreno Total',
			'construido' => 'Terreno Construido',
			'garage' => 'Tiene Garage',
			'jardin' => 'Tiene Jardin',
			'fondo' => 'Tiene Fondo',
			'precio' => 'Precio (U$S)',
			'descripcion' => 'Descripcion de la Propiedad',
			'ingreso' => 'Fecha de Ingreso',
			'egreso' => 'Fecha de Egreso',
			'clienteid' => 'Propietario del Inmueble',
			'empleadoid' => 'Empleado del Inmueble',
			'created_date' => 'Fecha Creacion',
			'modified_date' => 'Fecha Modificacion',
			'created_by' => 'Usuario creo',
			'modified_by' => 'Usuario modifico',
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

		$criteria->compare('idpropiedad',$this->idpropiedad);
		$criteria->compare('canthab',$this->canthab);
		$criteria->compare('cantbano',$this->cantbano);
		$criteria->compare('terreno',$this->terreno);
		$criteria->compare('construido',$this->construido);
		$criteria->compare('garage',$this->garage);
		$criteria->compare('jardin',$this->jardin);
		$criteria->compare('fondo',$this->fondo);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('ingreso',$this->ingreso,true);
		$criteria->compare('egreso',$this->egreso,true);
		$criteria->compare('clienteid',$this->clienteid);
		$criteria->compare('empleadoid',$this->empleadoid);
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
	 * @return Propiedad the static model class
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
