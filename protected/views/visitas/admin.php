<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Visita','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('visitas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Visitas</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'visitas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idvisitas',
		'fecha',
		'hora',
		'nombrecompleto',
		'telefono',
		'celular',
		/*
		'email',
		'idpropiedad',
		'idempleado',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
