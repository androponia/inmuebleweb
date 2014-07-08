<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Barrio','url'=>array('index')),
	array('label'=>'Create Barrio','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('barrio-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Barrios</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'barrio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idbarrio',
		'nombre',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
