<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ad_id'); ?>
		<?php echo $form->textField($model,'ad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ad_description'); ?>
		<?php echo $form->textArea($model,'ad_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_id'); ?>
		<?php echo $form->textField($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position_id'); ?>
		<?php echo $form->textField($model,'position_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->