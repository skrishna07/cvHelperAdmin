<?php
/* @var $this CvSitefaqController */
/* @var $model CvSitefaq */

$this->breadcrumbs=array(
	'Cv Sitefaqs'=>array('index'),
	$model->faq_id=>array('view','id'=>$model->faq_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvSitefaq', 'url'=>array('index')),
	array('label'=>'Create CvSitefaq', 'url'=>array('create')),
	array('label'=>'View CvSitefaq', 'url'=>array('view', 'id'=>$model->faq_id)),
	array('label'=>'Manage CvSitefaq', 'url'=>array('admin')),
);
?>

<h1>Update CvSitefaq <?php echo $model->faq_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>