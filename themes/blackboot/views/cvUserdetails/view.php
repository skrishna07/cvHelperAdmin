<?php
/* @var $this CvUserdetailsController */
/* @var $model CvUserdetails */

$this->breadcrumbs=array(
	'Cv Userdetails'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CvUserdetails', 'url'=>array('index')),
	array('label'=>'Create CvUserdetails', 'url'=>array('create')),
	array('label'=>'Update CvUserdetails', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete CvUserdetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CvUserdetails', 'url'=>array('admin')),
);
?>

<h1>View CvUserdetails #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'name',
		'email',
		'contact',
		'username',
		'password',
		'confirmcode',
		'newsletter',
		'updates',
		'user_type',
		'role',
	),
)); ?>
