<?php
/* @var $this CvSitefaqController */
/* @var $model CvSitefaq */

$this->breadcrumbs=array(
	'Cv Sitefaqs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvSitefaq', 'url'=>array('index')),
	array('label'=>'Create CvSitefaq', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cv-sitefaq-grid').yiiGridView('update', {
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

<h1>Manage Cv Sitefaqs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
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
                'value'=>'$data->faq_id',
        'class'=>'CCheckBoxColumn',
),

		'faq_id',
		'question',
		'answer',
		'description',
		'menu_id',
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

