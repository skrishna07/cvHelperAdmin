<?php
/* @var $this CvUserlogsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Userlogs',
);

$this->menu=array(
	array('label'=>'Create CvUserlogs', 'url'=>array('create')),
	array('label'=>'Manage CvUserlogs', 'url'=>array('admin')),
);
?>

<h1>Cv Userlogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
