<?php

/**
 * This is the model class for table "barrio".
 *
 * The followings are the available columns in table 'barrio':
 * @property integer $idbarrio
 * @property string $nombre
 * @property integer $ciudadid
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudad
 * @property Requerida[] $requeridas
 * @property Ubicacion[] $ubicacions
 */
class Barrio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barrio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, ciudadid', 'required'),
			array('ciudadid', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbarrio, nombre, ciudadid', 'safe', 'on'=>'search'),
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
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudadid'),
			'requeridas' => array(self::HAS_MANY, 'Requerida', 'barrioid'),
			'ubicacions' => array(self::HAS_MANY, 'Ubicacion', 'barrioid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbarrio' => 'Idbarrio',
			'nombre' => 'Nombre',
			'ciudadid' => 'Ciudadid',
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

		$criteria->compare('idbarrio',$this->idbarrio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ciudadid',$this->ciudadid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barrio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
