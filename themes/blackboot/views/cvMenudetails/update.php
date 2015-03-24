<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */

$this->breadcrumbs=array(
	'Cv Menudetails'=>array('index'),
	$model->menu_id=>array('view','id'=>$model->menu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvMenudetails', 'url'=>array('index')),
	array('label'=>'Create CvMenudetails', 'url'=>array('create')),
	array('label'=>'View CvMenudetails', 'url'=>array('view', 'id'=>$model->menu_id)),
	array('label'=>'Manage CvMenudetails', 'url'=>array('admin')),
);
?>

<h1>Update CvMenudetails <?php echo $model->menu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>