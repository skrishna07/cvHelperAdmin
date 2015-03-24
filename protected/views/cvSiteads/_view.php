<?php
/* @var $this CvSiteadsController */
/* @var $data CvSiteads */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ad_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ad_id), array('view', 'id'=>$data->ad_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ad_description')); ?>:</b>
	<?php echo CHtml::encode($data->ad_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::encode($data->menu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::encode($data->position_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_delete')); ?>:</b>
	<?php echo CHtml::encode($data->is_delete); ?>
	<br />


</div>