<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */

$this->breadcrumbs=array(
	'Cv Siteads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvSiteads', 'url'=>array('index')),
	array('label'=>'Manage CvSiteads', 'url'=>array('admin')),
);
?>

<h1>Create CvSiteads</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>