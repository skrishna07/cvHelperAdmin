<?php
/* @var $this CvSitecontentController */
/* @var $model CvSitecontent */

$this->breadcrumbs=array(
	'Cv Sitecontents'=>array('index'),
	$model->content_id,
);

$this->menu=array(
	array('label'=>'List CvSitecontent', 'url'=>array('index')),
	array('label'=>'Create CvSitecontent', 'url'=>array('create')),
	array('label'=>'Update CvSitecontent', 'url'=>array('update', 'id'=>$model->content_id)),
	
	array('label'=>'Manage CvSitecontent', 'url'=>array('admin')),
);
?>

<h1>View CvSitecontent #<?php echo $model->content_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'content_id',
		'content',
		'menu_id',
		'content_description',
		'is_delete',
	),
)); ?>
