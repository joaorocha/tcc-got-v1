<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property integer $id_noticia
 * @property string $titulo_noticia
 * @property string $texto_noticia
 * @property string $data_noticia
 * @property string $tipo_noticia
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo_noticia, texto_noticia, data_noticia', 'required'),
			array('titulo_noticia, tipo_noticia', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_noticia, titulo_noticia, texto_noticia, data_noticia, tipo_noticia', 'safe', 'on'=>'search'),
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
			'id_noticia' => 'Id Noticia',
			'titulo_noticia' => 'Titulo Noticia',
			'texto_noticia' => 'Texto Noticia',
			'data_noticia' => 'Data Noticia',
			'tipo_noticia' => 'Tipo Noticia',
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

		$criteria->compare('id_noticia',$this->id_noticia);
		$criteria->compare('titulo_noticia',$this->titulo_noticia,true);
		$criteria->compare('texto_noticia',$this->texto_noticia,true);
		$criteria->compare('data_noticia',$this->data_noticia,true);
		$criteria->compare('tipo_noticia',$this->tipo_noticia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
