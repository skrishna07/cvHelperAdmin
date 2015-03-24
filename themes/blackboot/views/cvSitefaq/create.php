<?php
/* @var $this CvSitefaqController */
/* @var $model CvSitefaq */

$this->breadcrumbs=array(
	'Cv Sitefaqs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvSitefaq', 'url'=>array('index')),
	array('label'=>'Manage CvSitefaq', 'url'=>array('admin')),
);
?>

<h1>Create CvSitefaq</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>