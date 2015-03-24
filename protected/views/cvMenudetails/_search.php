<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'menu_id'); ?>
		<?php echo $form->textField($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_label'); ?>
		<?php echo $form->textField($model,'menu_label',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_menu_id'); ?>
		<?php echo $form->textField($model,'parent_menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_sub_menu'); ?>
		<?php echo $form->textField($model,'has_sub_menu',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_header_footer'); ?>
		<?php echo $form->textField($model,'is_header_footer',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_faq_menu'); ?>
		<?php echo $form->textField($model,'is_faq_menu',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_link'); ?>
		<?php echo $form->textField($model,'menu_link',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_delete'); ?>
		<?php echo $form->textField($model,'is_delete',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->