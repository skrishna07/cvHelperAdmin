<?php
/* @var $this CvUserdetailsController */
/* @var $model CvUserdetails */

$this->breadcrumbs=array(
	'Cv Userdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvUserdetails', 'url'=>array('index')),
	array('label'=>'Manage CvUserdetails', 'url'=>array('admin')),
);
?>

<h1>Create CvUserdetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>