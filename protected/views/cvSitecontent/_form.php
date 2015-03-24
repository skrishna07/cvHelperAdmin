<?php
/* @var $this CvSitecontentController */
/* @var $model CvSitecontent */
/* @var $form CActiveForm */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript" 

src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-

bootstrap/3.0.3/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-

bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-

multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-

multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#CvRelatedlinks_menu_id').multiselect({
                includeSelectAllOption: true
            });
           
        });
    </script>	

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv-sitecontent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
		<div class="row">
   
    <select id="CvRelatedlinks_menu_id" multiple="multiple" name="menus[]">
    <?php 
    
    $data=Utility::getAllmenus();
    foreach($data as $menu)
    {
    ?>
        <option value="<?php echo $menu->menu_id ?>"><?php echo $menu->menu_label ?></option>
        <?php 
    }
        ?>
     
    </select>
    </div>
		<?php echo $form->error($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_description'); ?>
		<?php echo $form->textField($model,'content_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'content_description'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
        </body>
        </html>