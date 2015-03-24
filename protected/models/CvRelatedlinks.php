<?php

/**
 * This is the model class for table "cv_relatedlinks".
 *
 * The followings are the available columns in table 'cv_relatedlinks':
 * @property integer $link_id
 * @property string $link_url
 * @property integer $menu_id
 * @property string $link_label
 * @property string $is_delete
 *
 * The followings are the available model relations:
 * @property CvMenudetails $menu
 */
class CvRelatedlinks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cv_relatedlinks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link_url, menu_id, link_label', 'required'),
			array('menu_id', 'numerical', 'integerOnly'=>true),
			array('link_url', 'length', 'max'=>100),
			array('link_label', 'length', 'max'=>222),
			array('is_delete', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('link_id, link_url, menu_id, link_label, is_delete', 'safe', 'on'=>'search'),
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
			'link_id' => 'Link',
			'link_url' => 'Link Url',
			'menu_id' => 'Menu',
			'link_label' => 'Link Label',
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

		$criteria->compare('link_id',$this->link_id);
		$criteria->compare('link_url',$this->link_url,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('link_label',$this->link_label,true);
		$criteria->compare('is_delete',$this->is_delete,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CvRelatedlinks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
