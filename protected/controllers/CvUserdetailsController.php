<?php

class CvUserdetailsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles'=>array('gen'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','deleteAll'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new CvUserdetails;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CvUserdetails']))
		{
			$model->attributes=$_POST['CvUserdetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CvUserdetails']))
		{
			$model->attributes=$_POST['CvUserdetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('CvUserdetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionDeleteAll()
	{
		if (isset($_POST['id']))
		{
			$id=array();
			$id = $_POST['id'];
	
	
	
			for($i=0;$i<count($id);$i++)
			{
				
			$model1=$this->loadModel($id[$i]);
	
			$model1->is_delete = 'Y';
			$model1->save();
			}
	
			}
	
	
		}
		public function actionDelete()
		{
		if (isset($_POST['id']))
		{
	
		$id = $_POST['id'];
	
	
	
	
			
		$model1=$this->loadModel($id);
	
		$model1->is_delete = 'Y';
		$model1->save();
	
	
	
	
	
		}
		}
	
		/**
		* Lists all models.
		*/
	
	
		/**
		* Manages all models.
		 */
		 public function actionAdmin()
	
		 {
		 $model = CvUserdetails::model()->findAll();
		 $this->render('admin',array(
		 		'model'=>$model,
		 		));
		 }
	
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CvUserdetails the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CvUserdetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CvUserdetails $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cv-userdetails-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
