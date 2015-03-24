<?php
/* @var $this CvUserdetailsController */
/* @var $model CvUserdetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv-userdetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmcode'); ?>
		<?php echo $form->textField($model,'confirmcode',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'confirmcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newsletter'); ?>
		<?php echo $form->textField($model,'newsletter',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'newsletter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updates'); ?>
		<?php echo $form->textField($model,'updates',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'updates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_delete'); ?>
		<?php echo $form->textField($model,'is_delete',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_delete'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->