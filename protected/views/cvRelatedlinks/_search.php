<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'link_id'); ?>
		<?php echo $form->textField($model,'link_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_url'); ?>
		<?php echo $form->textField($model,'link_url',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_id'); ?>
		<?php echo $form->textField($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_label'); ?>
		<?php echo $form->textField($model,'link_label',array('size'=>60,'maxlength'=>222)); ?>
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