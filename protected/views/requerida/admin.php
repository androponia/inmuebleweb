<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Requerida','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('requerida-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Propiedades Requeridas</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'requerida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idrequerida',
		'nombre',
		'apellido',
		'email',
		'descripcion',
		'barrioid',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>
