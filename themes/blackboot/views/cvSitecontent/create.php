<?php
/* @var $this CvSitecontentController */
/* @var $model CvSitecontent */

$this->breadcrumbs=array(
	'Cv Sitecontents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CvSitecontent', 'url'=>array('index')),
	array('label'=>'Manage CvSitecontent', 'url'=>array('admin')),
);
?>

<h1>Create CvSitecontent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>