<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */
/* @var $form CActiveForm */
?>

<div class="form">

  
 

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv-relatedlinks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'link_label'); ?>
		<?php echo $form->textField($model,'link_label',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_url'); ?>
		<?php echo $form->textField($model,'link_url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'link_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
 <?php 
 $this->widget(
 		'application.extensions.emultiselect.EMultiSelect',
 		array('sortable'=>false/true, 'searchable'=>false/true)
 );
echo $form->dropDownList(
 		$model,
 		'menu_id',
 		Utility::getParentmenus(),
 		array('multiple'=>'multiple',
 				'key'=>'menu_id', 'class'=>'multiselect')
 );
 
 ?>
  

 <?php echo $form->error($model,'menu_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->