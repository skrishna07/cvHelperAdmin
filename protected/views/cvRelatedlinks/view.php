<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */

$this->breadcrumbs=array(
	'Cv Relatedlinks'=>array('index'),
	$model->link_id,
);

$this->menu=array(
	array('label'=>'List CvRelatedlinks', 'url'=>array('index')),
	array('label'=>'Create CvRelatedlinks', 'url'=>array('create')),
	array('label'=>'Update CvRelatedlinks', 'url'=>array('update', 'id'=>$model->link_id)),
	array('label'=>'Manage CvRelatedlinks', 'url'=>array('admin')),
);
?>

<h1>View CvRelatedlinks #<?php echo $model->link_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'link_id',
		'link_url',
		'menu_id',
		'link_label',
		'is_delete',
	),
)); ?>
