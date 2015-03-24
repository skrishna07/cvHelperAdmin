<?php
/* @var $this SearchController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->userid=>array('view','id'=>$model->userid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'View Registration', 'url'=>array('view', 'id'=>$model->userid)),
	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>Update Registration <?php echo $model->userid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>