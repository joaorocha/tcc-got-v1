<?php

/**
 * This is the model class for table "personagem".
 *
 * The followings are the available columns in table 'personagem':
 * @property integer $id_personagem
 * @property string $nome_personagem
 * @property integer $gold_personagem
 * @property integer $xp_personagem
 * @property integer $id_level
 * @property integer $id_mentor
 * @property integer $id_usuario
 * @property integer $forca_personagem
 * @property integer $inteligencia_personagem
 * @property integer $vitalidade_personagem
 * @property integer $agilidade_personagem
 * @property integer $defesa_personagem
 * @property integer $id_casa
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario
 * @property Mentor $idMentor
 * @property Level $idLevel
 * @property Casa $idCasa
 */
class Personagem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_personagem', 'required'),
			array('gold_personagem, xp_personagem, id_level, id_mentor, id_usuario, forca_personagem, inteligencia_personagem, vitalidade_personagem, agilidade_personagem, defesa_personagem, id_casa', 'numerical', 'integerOnly'=>true),
			array('nome_personagem', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_personagem, nome_personagem, gold_personagem, xp_personagem, id_level, id_mentor, id_usuario, forca_personagem, inteligencia_personagem, vitalidade_personagem, agilidade_personagem, defesa_personagem, id_casa', 'safe', 'on'=>'search'),
		);
	}

	public function beforeSave(){
	    $this->id_usuario = Yii::app()->user->id;
	    return parent::beforeSave();
	}


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idMentor' => array(self::BELONGS_TO, 'Mentor', 'id_mentor'),
			'idLevel' => array(self::BELONGS_TO, 'Level', 'id_level'),
			'idCasa' => array(self::BELONGS_TO, 'Casa', 'id_casa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_personagem' => 'Id Personagem',
			'nome_personagem' => 'Nome Personagem',
			'gold_personagem' => 'Gold Personagem',
			'xp_personagem' => 'Xp Personagem',
			'id_level' => 'Id Level',
			'id_mentor' => 'Id Mentor',
			'id_usuario' => 'Id Usuario',
			'forca_personagem' => 'Forca Personagem',
			'inteligencia_personagem' => 'Inteligencia Personagem',
			'vitalidade_personagem' => 'Vitalidade Personagem',
			'agilidade_personagem' => 'Agilidade Personagem',
			'defesa_personagem' => 'Defesa Personagem',
			'id_casa' => 'Id Casa',
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
		$criteria->compare('nome_personagem',$this->nome_personagem,true);
		$criteria->compare('gold_personagem',$this->gold_personagem);
		$criteria->compare('xp_personagem',$this->xp_personagem);
		$criteria->compare('id_level',$this->id_level);
		$criteria->compare('id_mentor',$this->id_mentor);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('forca_personagem',$this->forca_personagem);
		$criteria->compare('inteligencia_personagem',$this->inteligencia_personagem);
		$criteria->compare('vitalidade_personagem',$this->vitalidade_personagem);
		$criteria->compare('agilidade_personagem',$this->agilidade_personagem);
		$criteria->compare('defesa_personagem',$this->defesa_personagem);
		$criteria->compare('id_casa',$this->id_casa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personagem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
