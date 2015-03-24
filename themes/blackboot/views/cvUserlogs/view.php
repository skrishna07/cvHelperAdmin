<?php
/* @var $this CvUserlogsController */
/* @var $model CvUserlogs */

$this->breadcrumbs=array(
	'Cv Userlogs'=>array('index'),
	$model->log_id,
);

$this->menu=array(
	array('label'=>'List CvUserlogs', 'url'=>array('index')),
	array('label'=>'Create CvUserlogs', 'url'=>array('create')),
	array('label'=>'Update CvUserlogs', 'url'=>array('update', 'id'=>$model->log_id)),
	array('label'=>'Delete CvUserlogs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->log_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CvUserlogs', 'url'=>array('admin')),
);
?>

<h1>View CvUserlogs #<?php echo $model->log_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'log_id',
		'user_id',
		'menu_id',
		'description',
		'date',
	),
)); ?>
