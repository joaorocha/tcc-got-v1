<?php

/**
 * This is the model class for table "missao".
 *
 * The followings are the available columns in table 'missao':
 * @property integer $id_missao
 * @property string $nome_missao
 * @property string $descricao_missao
 * @property integer $duracao_missao
 * @property integer $min_xp_missao
 * @property integer $max_xp_missao
 * @property integer $min_gold_missao
 * @property integer $max_gold_missao
 *
 * The followings are the available model relations:
 * @property Personagem[] $personagems
 */
class Missao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'missao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('duracao_missao, min_xp_missao, max_xp_missao, min_gold_missao, max_gold_missao', 'numerical', 'integerOnly'=>true),
			array('nome_missao', 'length', 'max'=>45),
			array('descricao_missao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_missao, nome_missao, descricao_missao, duracao_missao, min_xp_missao, max_xp_missao, min_gold_missao, max_gold_missao', 'safe', 'on'=>'search'),
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
			'personagems' => array(self::MANY_MANY, 'Personagem', 'missao_controle(id_missao, id_personagem)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_missao' => 'Id Missao',
			'nome_missao' => 'Nome Missao',
			'descricao_missao' => 'Descricao Missao',
			'duracao_missao' => 'Duracao Missao',
			'min_xp_missao' => 'Min Xp Missao',
			'max_xp_missao' => 'Max Xp Missao',
			'min_gold_missao' => 'Min Gold Missao',
			'max_gold_missao' => 'Max Gold Missao',
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

		$criteria->compare('id_missao',$this->id_missao);
		$criteria->compare('nome_missao',$this->nome_missao,true);
		$criteria->compare('descricao_missao',$this->descricao_missao,true);
		$criteria->compare('duracao_missao',$this->duracao_missao);
		$criteria->compare('min_xp_missao',$this->min_xp_missao);
		$criteria->compare('max_xp_missao',$this->max_xp_missao);
		$criteria->compare('min_gold_missao',$this->min_gold_missao);
		$criteria->compare('max_gold_missao',$this->max_gold_missao);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Missao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
