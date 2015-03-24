<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */

$this->breadcrumbs=array(
	'Cv Menudetails'=>array('index'),
	$model->menu_id,
);

$this->menu=array(
	array('label'=>'List CvMenudetails', 'url'=>array('index')),
	array('label'=>'Create CvMenudetails', 'url'=>array('create')),
	array('label'=>'Update CvMenudetails', 'url'=>array('update', 'id'=>$model->menu_id)),
	array('label'=>'Manage CvMenudetails', 'url'=>array('admin')),
);
?>

<h1>View CvMenudetails #<?php echo $model->menu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'menu_id',
		'menu_label',
		'parent_menu_id',
		'has_sub_menu',
		'is_header_footer',
		'is_faq_menu',
		'menu_link',
		'is_delete',
	),
)); ?>
