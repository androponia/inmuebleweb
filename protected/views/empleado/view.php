<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idusuario,
);

$this->menu=array(
	array('label'=>'Crear Empleado','url'=>array('create')),
	array('label'=>'Actualizar Empleado','url'=>array('update','id'=>$modele->idusuario)),
	array('label'=>'Eliminar Empleado','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$modele->idusuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empleado','url'=>array('admin')),
);
?>

<h1>Ver Empleado #<?php echo $model->idusuario; ?></h1>

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
