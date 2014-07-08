<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->idvisitas,
);

$this->menu=array(
	array('label'=>'Crear Visita','url'=>array('create')),
	array('label'=>'Actualizar Visita','url'=>array('update','id'=>$model->idvisitas)),
	array('label'=>'Eliminar Visita','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idvisitas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Visitas','url'=>array('admin')),
);
?>

<h1>Ver Visita #<?php echo $model->idvisitas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idvisitas',
		'fecha',
		'hora',
		'nombrecompleto',
		'telefono',
		'celular',
		'email',
		'idpropiedad',
		'idempleado',
	),
)); ?>
