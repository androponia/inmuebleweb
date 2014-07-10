<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Empleado','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('empleado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empleados</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'empleado-grid',
	'dataProvider'=>$modelu->search(),
	'filter'=>$modelu,
	'template'=>"{items}\n{pager}",
	'columns'=>array(
		'idusuario',
		'nombre',
		'apellido',
		'email',
		'telefono',
		'celular',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>