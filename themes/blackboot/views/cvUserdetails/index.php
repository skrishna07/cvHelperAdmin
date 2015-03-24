<?php
/* @var $this CvUserdetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Userdetails',
);

$this->menu=array(
	array('label'=>'Create CvUserdetails', 'url'=>array('create')),
	array('label'=>'Manage CvUserdetails', 'url'=>array('admin')),
);
?>

<h1>Cv Userdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
