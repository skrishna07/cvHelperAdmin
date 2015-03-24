<?php

/**
 * This is the model class for table "cv_sitecontent".
 *
 * The followings are the available columns in table 'cv_sitecontent':
 * @property integer $content_id
 * @property string $content
 * @property integer $menu_id
 * @property string $content_description
 * @property string $is_delete
 *
 * The followings are the available model relations:
 * @property CvMenudetails $menu
 */
class CvSitecontent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cv_sitecontent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, menu_id, content_description', 'required'),
			array('menu_id', 'numerical', 'integerOnly'=>true),
			array('content_description', 'length', 'max'=>255),
			array('is_delete', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('content_id, content, menu_id, content_description, is_delete', 'safe', 'on'=>'search'),
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
			'menu' => array(self::BELONGS_TO, 'CvMenudetails', 'menu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'content_id' => 'Content',
			'content' => 'Content',
			'menu_id' => 'Menu',
			'content_description' => 'Content Description',
			'is_delete' => 'Is Delete',
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

		$criteria->compare('content_id',$this->content_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('content_description',$this->content_description,true);
		$criteria->compare('is_delete',$this->is_delete,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CvSitecontent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
