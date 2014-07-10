<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Barrio','url'=>array('create')),
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

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'barrio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idbarrio',
		'nombre',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>