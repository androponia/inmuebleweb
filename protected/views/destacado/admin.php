<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Destacado','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('destacado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Destacados</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'destacado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'iddestacado',
		'fechainicio',
		'fechafin',
		'idpropiedad',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
