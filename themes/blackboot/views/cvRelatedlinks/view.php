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
	array('label'=>'Delete CvRelatedlinks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->link_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CvRelatedlinks', 'url'=>array('admin')),
);
?>

<h1>View CvRelatedlinks #<?php echo $model->link_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'link_id',
		'link_label',
		'link_url',
		'menu_id',
	),
)); ?>
