<?php
/* @var $this CvRelatedlinksController */
/* @var $data CvRelatedlinks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->link_id), array('view', 'id'=>$data->link_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_url')); ?>:</b>
	<?php echo CHtml::encode($data->link_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::encode($data->menu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_label')); ?>:</b>
	<?php echo CHtml::encode($data->link_label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_delete')); ?>:</b>
	<?php echo CHtml::encode($data->is_delete); ?>
	<br />


</div>