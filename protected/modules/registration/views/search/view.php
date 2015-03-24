<?php
/* @var $this SearchController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->userid,
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'Update Registration', 'url'=>array('update', 'id'=>$model->userid)),

	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>View Registration #<?php echo $model->userid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userid',
		'username',
		'password',
		'role',
		'is_delete',
	),
)); ?>
