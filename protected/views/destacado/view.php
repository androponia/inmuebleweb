<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	$model->iddestacado,
);

$this->menu=array(
	array('label'=>'Crear Destacado','url'=>array('create')),
	array('label'=>'Actualizar Destacado','url'=>array('update','id'=>$model->iddestacado)),
	array('label'=>'Eliminar Destacado','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->iddestacado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Destacados','url'=>array('admin')),
);
?>

<h1>Ver Destacado #<?php echo $model->iddestacado; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'iddestacado',
		'fechainicio',
		'fechafin',
		'idpropiedad',
	),
)); ?>
