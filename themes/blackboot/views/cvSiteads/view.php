<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */

$this->breadcrumbs=array(
	'Cv Siteads'=>array('index'),
	$model->ad_id,
);

$this->menu=array(
	array('label'=>'List CvSiteads', 'url'=>array('index')),
	array('label'=>'Create CvSiteads', 'url'=>array('create')),
	array('label'=>'Update CvSiteads', 'url'=>array('update', 'id'=>$model->ad_id)),
	array('label'=>'Delete CvSiteads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ad_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CvSiteads', 'url'=>array('admin')),
);
?>

<h1>View CvSiteads #<?php echo $model->ad_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ad_id',
		'ad_description',
		'menu_id',
		'position_id',
	),
)); ?>
