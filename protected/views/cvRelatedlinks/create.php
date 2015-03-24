<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */

$this->breadcrumbs=array(
	'Cv Relatedlinks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvRelatedlinks', 'url'=>array('index')),
	array('label'=>'Manage CvRelatedlinks', 'url'=>array('admin')),
);
?>

<h1>Create CvRelatedlinks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>