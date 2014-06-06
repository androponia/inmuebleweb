<?php

/**
 * This is the model class for table "ubicacion".
 *
 * The followings are the available columns in table 'ubicacion':
 * @property integer $idubicacion
 * @property string $direccion
 * @property string $latitudlongitud
 * @property integer $barrioid
 *
 * The followings are the available model relations:
 * @property Barrio $barrio
 */
class Ubicacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ubicacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direccion, barrioid', 'required'),
			array('barrioid', 'numerical', 'integerOnly'=>true),
			array('direccion, latitudlongitud', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idubicacion, direccion, latitudlongitud, barrioid', 'safe', 'on'=>'search'),
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
			'idubicacion' => 'Idubicacion',
			'direccion' => 'Direccion',
			'latitudlongitud' => 'Latitudlongitud',
			'barrioid' => 'Barrioid',
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

		$criteria->compare('idubicacion',$this->idubicacion);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('latitudlongitud',$this->latitudlongitud,true);
		$criteria->compare('barrioid',$this->barrioid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ubicacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
