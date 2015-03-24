<?php
/* @var $this CvSitefaqController */
/* @var $data CvSitefaq */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('faq_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->faq_id), array('view', 'id'=>$data->faq_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::encode($data->menu_id); ?>
	<br />


</div>