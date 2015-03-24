<?php
/* @var $this CvSitecontentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv Sitecontents',
);

$this->menu=array(
	array('label'=>'Create CvSitecontent', 'url'=>array('create')),
	array('label'=>'Manage CvSitecontent', 'url'=>array('admin')),
);
?>

<h1>Cv Sitecontents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
