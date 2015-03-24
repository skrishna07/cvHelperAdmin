<?php
/* @var $this CvUserdetailsController */
/* @var $model CvUserdetails */

$this->breadcrumbs=array(
	'Cv Userdetails'=>array('index'),
	$model->name=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvUserdetails', 'url'=>array('index')),
	array('label'=>'Create CvUserdetails', 'url'=>array('create')),
	array('label'=>'View CvUserdetails', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage CvUserdetails', 'url'=>array('admin')),
);
?>

<h1>Update CvUserdetails <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>