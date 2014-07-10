<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	$model->idrequerida,
);

$this->menu=array(
	array('label'=>'Crear Requerida','url'=>array('create')),
	array('label'=>'Actualizar Requerida','url'=>array('update','id'=>$model->idrequerida)),
	array('label'=>'Eliminar Requerida','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idrequerida),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Propiedades Requeridas','url'=>array('admin')),
);
?>

<h1>Ver Requerida #<?php echo $model->idrequerida; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idrequerida',
		'nombre',
		'apellido',
		'email',
		'descripcion',
		'barrioid',
	),
)); ?>
