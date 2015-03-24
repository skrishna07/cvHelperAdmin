<?php
/* @var $this CvRelatedlinksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Relatedlinks',
);

$this->menu=array(
	array('label'=>'Create CvRelatedlinks', 'url'=>array('create')),
	array('label'=>'Manage CvRelatedlinks', 'url'=>array('admin')),
);
?>

<h1>Cv Relatedlinks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
