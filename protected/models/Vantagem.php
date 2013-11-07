<?php

/**
 * This is the model class for table "vantagem".
 *
 * The followings are the available columns in table 'vantagem':
 * @property integer $id_vantagem
 * @property string $descricao_vantagem
 * @property integer $valor_min_vantagem
 * @property integer $valor_max_vantagem
 * @property integer $id_atributo
 *
 * The followings are the available model relations:
 * @property Mentor[] $mentors
 * @property Atributo $idAtributo
 */
class Vantagem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vantagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_atributo', 'required'),
			array('valor_min_vantagem, valor_max_vantagem, id_atributo', 'numerical', 'integerOnly'=>true),
			array('descricao_vantagem', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vantagem, descricao_vantagem, valor_min_vantagem, valor_max_vantagem, id_atributo', 'safe', 'on'=>'search'),
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
			'mentors' => array(self::HAS_MANY, 'Mentor', 'id_vantagem'),
			'idAtributo' => array(self::BELONGS_TO, 'Atributo', 'id_atributo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vantagem' => 'Id Vantagem',
			'descricao_vantagem' => 'Descricao Vantagem',
			'valor_min_vantagem' => 'Valor Min Vantagem',
			'valor_max_vantagem' => 'Valor Max Vantagem',
			'id_atributo' => 'Id Atributo',
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

		$criteria->compare('id_vantagem',$this->id_vantagem);
		$criteria->compare('descricao_vantagem',$this->descricao_vantagem,true);
		$criteria->compare('valor_min_vantagem',$this->valor_min_vantagem);
		$criteria->compare('valor_max_vantagem',$this->valor_max_vantagem);
		$criteria->compare('id_atributo',$this->id_atributo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vantagem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
