<?php
/* @var $this CvSitefaqController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Sitefaqs',
);

$this->menu=array(
	array('label'=>'Create CvSitefaq', 'url'=>array('create')),
	array('label'=>'Manage CvSitefaq', 'url'=>array('admin')),
);
?>

<h1>Cv Sitefaqs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
