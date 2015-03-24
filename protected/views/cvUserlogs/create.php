<?php
/* @var $this CvUserlogsController */
/* @var $model CvUserlogs */

$this->breadcrumbs=array(
	'Cv Userlogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvUserlogs', 'url'=>array('index')),
	array('label'=>'Manage CvUserlogs', 'url'=>array('admin')),
);
?>

<h1>Create CvUserlogs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>