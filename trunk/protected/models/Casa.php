<?php

/**
 * This is the model class for table "casa".
 *
 * The followings are the available columns in table 'casa':
 * @property integer $id_casa
 * @property string $nome_casa
 * @property string $localizacao_casa
 * @property integer $qtd_jogadores_casa
 *
 * The followings are the available model relations:
 * @property Personagem[] $personagems
 * @property Mentor[] $mentors
 */
class Casa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_casa', 'required'),
			array('qtd_jogadores_casa', 'numerical', 'integerOnly'=>true),
			array('nome_casa', 'length', 'max'=>45),
			array('localizacao_casa', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_casa, nome_casa, localizacao_casa, qtd_jogadores_casa', 'safe', 'on'=>'search'),
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
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_casa'),
			'mentors' => array(self::HAS_MANY, 'Mentor', 'id_casa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_casa' => 'Id Casa',
			'nome_casa' => 'Nome Casa',
			'localizacao_casa' => 'Localizacao Casa',
			'qtd_jogadores_casa' => 'Qtd Jogadores Casa',
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

		$criteria->compare('id_casa',$this->id_casa);
		$criteria->compare('nome_casa',$this->nome_casa,true);
		$criteria->compare('localizacao_casa',$this->localizacao_casa,true);
		$criteria->compare('qtd_jogadores_casa',$this->qtd_jogadores_casa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Casa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
