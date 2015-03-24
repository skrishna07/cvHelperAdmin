<?php
/* @var $this CvMenudetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Menudetails',
);

$this->menu=array(
	array('label'=>'Create CvMenudetails', 'url'=>array('create')),
	array('label'=>'Manage CvMenudetails', 'url'=>array('admin')),
);
?>

<h1>Cv Menudetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
