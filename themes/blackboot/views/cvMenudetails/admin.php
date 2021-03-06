<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */

$this->breadcrumbs=array(
	'Cv Menudetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvMenudetails', 'url'=>array('index')),
	array('label'=>'Create CvMenudetails', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
});
		$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('campaign-grid', {
		data: $(this).serialize()
});
		return false;
});
		$('.deleteall-button').click(function(){

		var atLeastOneIsChecked = $('input[name=\"campaign-grid_c0[]\"]:checked').length > 0;

		if (!atLeastOneIsChecked)
		{
		alert('Please select atleast one Campaign to delete');
}
		else if (window.confirm('Are you sure you want to delete the Campaign?'))
		{
		document.getElementById('campaign-search-form').action='deleteall';
		document.getElementById('campaign-search-form').submit();
}
});
		");

?>

<h2>Manage CV Menudetails </h2>

<p>
You may optionally enter a comparison operator (<b><</b>, <b><=</b>, <b>></b>, <b>>=</b>, <b><></b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php 
echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); 
?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<!-- search-form -->

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'campaign-search-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'campaign-grid',
        'selectableRows'=>2,
        'dataProvider'=>$model->search(),
		'filter'=>$model,
        'columns'=>array(
        
                        array(
                'value'=>'$data->menu_id',
        'class'=>'CCheckBoxColumn',
      
                ),
                'menu_id',
        		'menu_label',
        		'parent_menu_id',
        		'has_sub_menu',
        		'is_header_footer',
        		'is_faq_menu',
        		
                    
                array(
                        'class'=>'CButtonColumn',
                ),
        ),
)); ?>

<div class="row buttons">
        <?php echo CHtml::button('Delete',array('name'=>'btndeleteall','class'=>'deleteall-button')); ?>
</div>
<?php $this->endWidget(); ?>
</div>
