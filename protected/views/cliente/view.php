<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$modelc->idusuario,
);

$this->menu=array(
	array('label'=>'Crear Cliente','url'=>array('create')),
	array('label'=>'Actualizar Cliente','url'=>array('update','id'=>$modelc->idusuario)),
	array('label'=>'Eliminar Cliente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$modelc->idusuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Clientes','url'=>array('admin')),
);
?>

<h1>Ver Cliente #<?php echo $modelc->idusuario; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$modelu,
	'attributes'=>array(
		'idusuario',
		'nombre',
		'apellido',
		'email',
		'telefono',
		'celular',
	),
)); ?>
