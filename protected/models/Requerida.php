<?php

/**
 * This is the model class for table "requerida".
 *
 * The followings are the available columns in table 'requerida':
 * @property integer $idrequerida
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $descripcion
 * @property integer $barrioid
 *
 * The followings are the available model relations:
 * @property Barrio $barrio
 */
class Requerida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'requerida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, email, descripcion, barrioid', 'required'),
			array('barrioid', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, email', 'length', 'max'=>60),
			array('descripcion', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idrequerida, nombre, apellido, email, descripcion, barrioid', 'safe', 'on'=>'search'),
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
			'barrio' => array(self::BELONGS_TO, 'Barrio', 'barrioid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idrequerida' => 'Codigo',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'email' => 'E-mail',
			'descripcion' => 'Descripcion',
			'barrioid' => 'Barrio',
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

		$criteria->compare('idrequerida',$this->idrequerida);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('barrioid',$this->barrioid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Requerida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
