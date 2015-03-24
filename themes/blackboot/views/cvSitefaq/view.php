<?php
/* @var $this CvSitefaqController */
/* @var $model CvSitefaq */

$this->breadcrumbs=array(
	'Cv Sitefaqs'=>array('index'),
	$model->faq_id,
);

$this->menu=array(
	array('label'=>'List CvSitefaq', 'url'=>array('index')),
	array('label'=>'Create CvSitefaq', 'url'=>array('create')),
	array('label'=>'Update CvSitefaq', 'url'=>array('update', 'id'=>$model->faq_id)),
	array('label'=>'Delete CvSitefaq', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->faq_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CvSitefaq', 'url'=>array('admin')),
);
?>

<h1>View CvSitefaq #<?php echo $model->faq_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'faq_id',
		'question',
		'answer',
		'description',
		'menu_id',
	),
)); ?>
