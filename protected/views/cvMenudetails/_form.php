<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv-menudetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_label'); ?>
		<?php echo $form->textField($model,'menu_label',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'menu_label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_menu_id'); ?>
		<?php echo $form->dropDownList($model,'parent_menu_id',Utility::getParentmenus(), array('empty'=>'Select Option')); ?>
		<?php echo $form->error($model,'parent_menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_sub_menu'); ?>
		<?php 
		echo $form->dropDownList($model,
                        'has_sub_menu',
                        array('Y'=>'Y','N'=>'N'),
                        array('empty'=>'Select Option'));
		?>
		<?php echo $form->error($model,'has_sub_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_header_footer'); ?>
		<?php 
		echo $form->dropDownList($model,

                        'is_header_footer',

                        array('H'=>'H','F'=>'F'),

                        array('empty'=>'Select Option'));
		?>
		
		<?php echo $form->error($model,'is_header_footer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_faq_menu'); ?>
		<?php 
	echo $form->dropDownList($model,

                        'is_faq_menu',
                        array('Y'=>'Y','N'=>'N'),

                        array('empty'=>'Select Option'));
	?>
		<?php echo $form->error($model,'is_faq_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_link'); ?>
		<?php echo $form->textField($model,'menu_link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'menu_link'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->