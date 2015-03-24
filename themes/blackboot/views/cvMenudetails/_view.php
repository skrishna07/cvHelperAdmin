<?php
/* @var $this CvMenudetailsController */
/* @var $data CvMenudetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->menu_id), array('view', 'id'=>$data->menu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_label')); ?>:</b>
	<?php echo CHtml::encode($data->menu_label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_menu_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_menu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_sub_menu')); ?>:</b>
	<?php echo CHtml::encode($data->has_sub_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_header_footer')); ?>:</b>
	<?php echo CHtml::encode($data->is_header_footer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_faq_menu')); ?>:</b>
	<?php echo CHtml::encode($data->is_faq_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_link')); ?>:</b>
	<?php echo CHtml::encode($data->menu_link); ?>
	<br />


</div>