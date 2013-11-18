<?php

/**
 * This is the model class for table "vantagem".
 *
 * The followings are the available columns in table 'vantagem':
 * @property integer $id_vantagem
 * @property string $descricao_vantagem
 * @property integer $gold_vantagem
 * @property integer $forca_vantagem
 * @property integer $vitalidade_vantagem
 * @property integer $inteligencia_vantagem
 * @property integer $agilidade_vantagem
 * @property integer $defesa_vantagem
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
			array('gold_vantagem, forca_vantagem, vitalidade_vantagem, inteligencia_vantagem, agilidade_vantagem, defesa_vantagem', 'numerical', 'integerOnly'=>true),
			array('descricao_vantagem', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vantagem, descricao_vantagem, gold_vantagem, forca_vantagem, vitalidade_vantagem, inteligencia_vantagem, agilidade_vantagem, defesa_vantagem', 'safe', 'on'=>'search'),
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
			'id_vantagem' => 'Id Vantagem',
			'descricao_vantagem' => 'Descricao Vantagem',
			'gold_vantagem' => 'Gold Vantagem',
			'forca_vantagem' => 'Forca Vantagem',
			'vitalidade_vantagem' => 'Vitalidade Vantagem',
			'inteligencia_vantagem' => 'Inteligencia Vantagem',
			'agilidade_vantagem' => 'Agilidade Vantagem',
			'defesa_vantagem' => 'Defesa Vantagem',
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
		$criteria->compare('gold_vantagem',$this->gold_vantagem);
		$criteria->compare('forca_vantagem',$this->forca_vantagem);
		$criteria->compare('vitalidade_vantagem',$this->vitalidade_vantagem);
		$criteria->compare('inteligencia_vantagem',$this->inteligencia_vantagem);
		$criteria->compare('agilidade_vantagem',$this->agilidade_vantagem);
		$criteria->compare('defesa_vantagem',$this->defesa_vantagem);

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
