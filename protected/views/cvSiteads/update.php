<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */

$this->breadcrumbs=array(
	'Cv Siteads'=>array('index'),
	$model->ad_id=>array('view','id'=>$model->ad_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CvSiteads', 'url'=>array('index')),
	array('label'=>'Create CvSiteads', 'url'=>array('create')),
	array('label'=>'View CvSiteads', 'url'=>array('view', 'id'=>$model->ad_id)),
	array('label'=>'Manage CvSiteads', 'url'=>array('admin')),
);
?>

<h1>Update CvSiteads <?php echo $model->ad_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>