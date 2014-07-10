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
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>