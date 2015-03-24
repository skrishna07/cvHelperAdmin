<?php
/* @var $this CvSitecontentController */
/* @var $model CvSitecontent */

$this->breadcrumbs=array(
	'Cv Sitecontents'=>array('index'),
	$model->content_id=>array('view','id'=>$model->content_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvSitecontent', 'url'=>array('index')),
	array('label'=>'Create CvSitecontent', 'url'=>array('create')),
	array('label'=>'View CvSitecontent', 'url'=>array('view', 'id'=>$model->content_id)),
	array('label'=>'Manage CvSitecontent', 'url'=>array('admin')),
);
?>

<h1>Update CvSitecontent <?php echo $model->content_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>