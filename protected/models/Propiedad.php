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
 *
 * The followings are the available model relations:
 * @property Destacado[] $destacados
 * @property Imagen[] $imagens
 * @property Empleado $empleado
 * @property Cliente $cliente
 * @property Ubicacion[] $ubicacions
 * @property Visitas[] $visitases
 */
class Propiedad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Propiedad the static model class
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
			array('canthab, cantbano, precio, descripcion, ingreso, clienteid, empleadoid', 'required'),
			array('canthab, cantbano, terreno, construido, garage, jardin, fondo, clienteid, empleadoid', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('descripcion', 'length', 'max'=>150),
			array('created_by, modified_by', 'length', 'max'=>128),
			array('egreso, created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
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
			'destacados' => array(self::HAS_MANY, 'Destacado', 'idpropiedad'),
			'imagens' => array(self::HAS_MANY, 'Imagen', 'propiedadid'),
			'empleado' => array(self::BELONGS_TO, 'Empleado', 'empleadoid'),
			'cliente' => array(self::BELONGS_TO, 'Cliente', 'clienteid'),
			'ubicacions' => array(self::HAS_MANY, 'Ubicacion', 'propiedadid'),
			'visitases' => array(self::HAS_MANY, 'Visitas', 'idpropiedad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpropiedad' => 'Idpropiedad',
			'canthab' => 'Canthab',
			'cantbano' => 'Cantbano',
			'terreno' => 'Terreno',
			'construido' => 'Construido',
			'garage' => 'Garage',
			'jardin' => 'Jardin',
			'fondo' => 'Fondo',
			'precio' => 'Precio',
			'descripcion' => 'Descripcion',
			'ingreso' => 'Ingreso',
			'egreso' => 'Egreso',
			'clienteid' => 'Clienteid',
			'empleadoid' => 'Empleadoid',
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