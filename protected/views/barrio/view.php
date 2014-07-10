<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idbarrio,
);

$this->menu=array(
	array('label'=>'Crear Barrio','url'=>array('create')),
	array('label'=>'Actualizar Barrio','url'=>array('update','id'=>$model->idbarrio)),
	array('label'=>'Eliminar Barrio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idbarrio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Barrios','url'=>array('admin')),
);
?>

<h1>Ver Barrio #<?php echo $model->idbarrio; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idbarrio',
		'nombre',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
	),
)); ?>
