<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	$model->idrequerida,
);

$this->menu=array(
	array('label'=>'List Requerida','url'=>array('index')),
	array('label'=>'Create Requerida','url'=>array('create')),
	array('label'=>'Update Requerida','url'=>array('update','id'=>$model->idrequerida)),
	array('label'=>'Delete Requerida','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idrequerida),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requerida','url'=>array('admin')),
);
?>

<h1>View Requerida #<?php echo $model->idrequerida; ?></h1>

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
