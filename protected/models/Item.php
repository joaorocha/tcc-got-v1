<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id_item
 * @property string $nome_item
 * @property string $descricao_item
 * @property integer $min_lvl_item
 * @property integer $forca_item
 * @property integer $vitalidade_item
 * @property integer $inteligencia_item
 * @property integer $agilidade_item
 * @property integer $defesa_item
 * @property integer $preco_item
 *
 * The followings are the available model relations:
 * @property Personagem[] $personagems
 */
class Item extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_item', 'required'),
			array('min_lvl_item, forca_item, vitalidade_item, inteligencia_item, agilidade_item, defesa_item, preco_item', 'numerical', 'integerOnly'=>true),
			array('nome_item', 'length', 'max'=>45),
			array('descricao_item', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_item, nome_item, descricao_item, min_lvl_item, forca_item, vitalidade_item, inteligencia_item, agilidade_item, defesa_item, preco_item', 'safe', 'on'=>'search'),
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
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_item'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_item' => 'Id Item',
			'nome_item' => 'Nome Item',
			'descricao_item' => 'Descricao Item',
			'min_lvl_item' => 'Min Lvl Item',
			'forca_item' => 'Forca Item',
			'vitalidade_item' => 'Vitalidade Item',
			'inteligencia_item' => 'Inteligencia Item',
			'agilidade_item' => 'Agilidade Item',
			'defesa_item' => 'Defesa Item',
			'preco_item' => 'Preco Item',
		);
	}

	public function compraItem()
	{
		$usuario = Yii::app()->user->id;
		$item = $this->id_item;
		$gold = $this->preco_item;

		$sql->update('personagem', array(
    		'id_item'=>$item,
    		'gold_personagem'=>'gold_personagem - '.$gold
		), 'id_personagem=:id', array(':id'=>$usuario));
		return $sql
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

		$criteria->compare('id_item',$this->id_item);
		$criteria->compare('nome_item',$this->nome_item,true);
		$criteria->compare('descricao_item',$this->descricao_item,true);
		$criteria->compare('min_lvl_item',$this->min_lvl_item);
		$criteria->compare('forca_item',$this->forca_item);
		$criteria->compare('vitalidade_item',$this->vitalidade_item);
		$criteria->compare('inteligencia_item',$this->inteligencia_item);
		$criteria->compare('agilidade_item',$this->agilidade_item);
		$criteria->compare('defesa_item',$this->defesa_item);
		$criteria->compare('preco_item',$this->preco_item);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Item the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
