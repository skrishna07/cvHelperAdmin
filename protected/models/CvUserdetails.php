<?php

/**
 * This is the model class for table "cv_userdetails".
 *
 * The followings are the available columns in table 'cv_userdetails':
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $contact
 * @property string $username
 * @property string $password
 * @property string $confirmcode
 * @property string $newsletter
 * @property string $updates
 * @property string $user_type
 * @property string $role
 * @property string $is_delete
 */
class CvUserdetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cv_userdetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, contact, username, password, confirmcode, user_type, role', 'required'),
			array('name', 'length', 'max'=>128),
			array('email', 'length', 'max'=>64),
			array('contact', 'length', 'max'=>16),
			array('username, password, confirmcode', 'length', 'max'=>32),
			array('newsletter, updates, is_delete', 'length', 'max'=>1),
			array('user_type', 'length', 'max'=>10),
			array('role', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, name, email, contact, username, password, confirmcode, newsletter, updates, user_type, role, is_delete', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'name' => 'Name',
			'email' => 'Email',
			'contact' => 'Contact',
			'username' => 'Username',
			'password' => 'Password',
			'confirmcode' => 'Confirmcode',
			'newsletter' => 'Newsletter',
			'updates' => 'Updates',
			'user_type' => 'User Type',
			'role' => 'Role',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('confirmcode',$this->confirmcode,true);
		$criteria->compare('newsletter',$this->newsletter,true);
		$criteria->compare('updates',$this->updates,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('is_delete',$this->is_delete,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CvUserdetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
