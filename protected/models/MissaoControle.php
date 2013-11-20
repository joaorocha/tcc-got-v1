<?php

/**
 * This is the model class for table "missao_controle".
 *
 * The followings are the available columns in table 'missao_controle':
 * @property integer $id_personagem
 * @property integer $id_missao
 * @property string $hora_inicio_missao
 * @property string $hora_fim_missao
 */
class MissaoControle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'missao_controle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_personagem, id_missao', 'required'),
			array('id_personagem, id_missao', 'numerical', 'integerOnly'=>true),
			array('hora_inicio_missao, hora_fim_missao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_personagem, id_missao, hora_inicio_missao, hora_fim_missao', 'safe', 'on'=>'search'),
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
			'id_personagem' => 'Id Personagem',
			'id_missao' => 'Id Missao',
			'hora_inicio_missao' => 'Hora Inicio Missao',
			'hora_fim_missao' => 'Hora Fim Missao',
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

		$criteria->compare('id_personagem',$this->id_personagem);
		$criteria->compare('id_missao',$this->id_missao);
		$criteria->compare('hora_inicio_missao',$this->hora_inicio_missao,true);
		$criteria->compare('hora_fim_missao',$this->hora_fim_missao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MissaoControle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
