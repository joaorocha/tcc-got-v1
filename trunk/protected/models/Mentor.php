<?php

/**
 * This is the model class for table "mentor".
 *
 * The followings are the available columns in table 'mentor':
 * @property integer $id_mentor
 * @property string $nome_mentor
 * @property integer $id_casa
 * @property integer $id_vantagem
 *
 * The followings are the available model relations:
 * @property Personagem[] $personagems
 * @property Casa $idCasa
 */
class Mentor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mentor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_mentor, id_casa, id_vantagem', 'required'),
			array('id_casa, id_vantagem', 'numerical', 'integerOnly'=>true),
			array('nome_mentor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_mentor, nome_mentor, id_casa, id_vantagem', 'safe', 'on'=>'search'),
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
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_mentor'),
			'idCasa' => array(self::BELONGS_TO, 'Casa', 'id_casa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mentor' => 'Id Mentor',
			'nome_mentor' => 'Nome Mentor',
			'id_casa' => 'Id Casa',
			'id_vantagem' => 'Id Vantagem',
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

		$criteria->compare('id_mentor',$this->id_mentor);
		$criteria->compare('nome_mentor',$this->nome_mentor,true);
		$criteria->compare('id_casa',$this->id_casa);
		$criteria->compare('id_vantagem',$this->id_vantagem);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mentor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
