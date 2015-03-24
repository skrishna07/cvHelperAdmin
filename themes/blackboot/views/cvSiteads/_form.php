<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv-siteads-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ad_description'); ?>
		<?php echo $form->textArea($model,'ad_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ad_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
	<?php
	
	 
	$this->widget('ext.multiselect.JMultiSelect',array(
			    'model'=>$model,
			    'attribute'=>'attribute',
			     'data'=>Utility::getAllmenus(),
			     // additional javascript options for the MultiSelect plugin
			      'options'=>array()
			));
	
	?>
 <?php echo $form->error($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_id'); ?>
		<?php echo $form->textField($model,'position_id'); ?>
		<?php echo $form->error($model,'position_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->