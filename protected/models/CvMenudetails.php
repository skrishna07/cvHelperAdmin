<?php

/**
 * This is the model class for table "cv_menudetails".
 *
 * The followings are the available columns in table 'cv_menudetails':
 * @property integer $menu_id
 * @property string $menu_label
 * @property integer $parent_menu_id
 * @property string $has_sub_menu
 * @property string $is_header_footer
 * @property string $is_faq_menu
 * @property string $menu_link
 * @property string $is_delete
 *
 * The followings are the available model relations:
 * @property CvRelatedlinks[] $cvRelatedlinks
 * @property CvSiteads[] $cvSiteads
 * @property CvSitecontent[] $cvSitecontents
 * @property CvSitefaq[] $cvSitefaqs
 */
class CvMenudetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cv_menudetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_label, is_header_footer, is_faq_menu, menu_link', 'required'),
				array('menu_label','unique'),
			array('parent_menu_id', 'numerical', 'integerOnly'=>true),
			array('menu_label, menu_link', 'length', 'max'=>100),
			array('has_sub_menu, is_header_footer, is_faq_menu, is_delete', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('menu_id, menu_label, parent_menu_id, has_sub_menu, is_header_footer, is_faq_menu, menu_link, is_delete', 'safe', 'on'=>'search'),
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
			'cvRelatedlinks' => array(self::HAS_MANY, 'CvRelatedlinks', 'menu_id'),
			'cvSiteads' => array(self::HAS_MANY, 'CvSiteads', 'menu_id'),
			'cvSitecontents' => array(self::HAS_MANY, 'CvSitecontent', 'menu_id'),
			'cvSitefaqs' => array(self::HAS_MANY, 'CvSitefaq', 'menu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'menu_id' => 'Menu',
			'menu_label' => 'Menu Label',
			'parent_menu_id' => 'Parent Menu',
			'has_sub_menu' => 'Has Sub Menu',
			'is_header_footer' => 'Is Header Footer',
			'is_faq_menu' => 'Is Faq Menu',
			'menu_link' => 'Menu Link',
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

		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('menu_label',$this->menu_label,true);
		$criteria->compare('parent_menu_id',$this->parent_menu_id);
		$criteria->compare('has_sub_menu',$this->has_sub_menu,true);
		$criteria->compare('is_header_footer',$this->is_header_footer,true);
		$criteria->compare('is_faq_menu',$this->is_faq_menu,true);
		$criteria->compare('menu_link',$this->menu_link,true);
		$criteria->compare('is_delete',$this->is_delete,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CvMenudetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
