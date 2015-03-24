<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */

$this->breadcrumbs=array(
	'Cv Menudetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvMenudetails', 'url'=>array('index')),
	array('label'=>'Manage CvMenudetails', 'url'=>array('admin')),
);
?>

<h1>Create CvMenudetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>