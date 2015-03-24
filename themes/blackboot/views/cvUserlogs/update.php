<?php
/* @var $this CvUserlogsController */
/* @var $model CvUserlogs */

$this->breadcrumbs=array(
	'Cv Userlogs'=>array('index'),
	$model->log_id=>array('view','id'=>$model->log_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvUserlogs', 'url'=>array('index')),
	array('label'=>'Create CvUserlogs', 'url'=>array('create')),
	array('label'=>'View CvUserlogs', 'url'=>array('view', 'id'=>$model->log_id)),
	array('label'=>'Manage CvUserlogs', 'url'=>array('admin')),
);
?>

<h1>Update CvUserlogs <?php echo $model->log_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>