<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */

$this->breadcrumbs=array(
	'Cv Relatedlinks'=>array('index'),
	$model->link_id=>array('view','id'=>$model->link_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvRelatedlinks', 'url'=>array('index')),
	array('label'=>'Create CvRelatedlinks', 'url'=>array('create')),
	array('label'=>'View CvRelatedlinks', 'url'=>array('view', 'id'=>$model->link_id)),
	array('label'=>'Manage CvRelatedlinks', 'url'=>array('admin')),
);
?>

<h1>Update CvRelatedlinks <?php echo $model->link_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>