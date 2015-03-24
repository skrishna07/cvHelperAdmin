<?php
/* @var $this CvSiteadsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Siteads',
);

$this->menu=array(
	array('label'=>'Create CvSiteads', 'url'=>array('create')),
	array('label'=>'Manage CvSiteads', 'url'=>array('admin')),
);
?>

<h1>Cv Siteads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
