<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $nome_usuario
 * @property string $login_usuario
 * @property string $passwd_usuario
 * @property boolean $status_usuario
 * @property string $email_usuario
 * @property boolean $tipo_usuario
 * @property integer $id_usuario
 * @property integer $id_personagem
 *
 * The followings are the available model relations:
 * @property Personagem[] $personagems
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_usuario, login_usuario, passwd_usuario, email_usuario', 'required'),
			array('nome_usuario', 'length', 'max'=>50),
			array('passwd_usuario', 'length', 'min'=>6, 'message'=>'Senha muito curta!'),
			array('login_usuario', 'length', 'min'=>6, 'message'=>'Login muito curto!'),
			array('email_usuario', 'email', 'message'=>'E-mail invalido'),
			array('login_usuario', 'unique', 'message'=>'Usuário já existe'),
			array('email_usuario', 'unique', 'message'=>'E-mail já existe!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nome_usuario, login_usuario, passwd_usuario, status_usuario, email_usuario, tipo_usuario, id_usuario, id_personagem', 'safe', 'on'=>'search'),
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
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nome_usuario' => 'Nome',
			'login_usuario' => 'Login',
			'passwd_usuario' => 'Senha',
			'status_usuario' => 'Status Usuario',
			'email_usuario' => 'Email',
			'tipo_usuario' => 'Tipo Usuario',
			'id_usuario' => 'Id Usuario',
			'id_personagem' => 'Id Personagem',
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

		$criteria->compare('nome_usuario',$this->nome_usuario,true);
		$criteria->compare('login_usuario',$this->login_usuario,true);
		$criteria->compare('passwd_usuario',$this->passwd_usuario,true);
		$criteria->compare('status_usuario',$this->status_usuario);
		$criteria->compare('email_usuario',$this->email_usuario,true);
		$criteria->compare('tipo_usuario',$this->tipo_usuario);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_personagem',$this->id_personagem);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
