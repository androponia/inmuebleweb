<?php
$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idubicacion,
);

$this->menu=array(
	array('label'=>'List Ubicacion','url'=>array('index')),
	array('label'=>'Create Ubicacion','url'=>array('create')),
	array('label'=>'Update Ubicacion','url'=>array('update','id'=>$model->idubicacion)),
	array('label'=>'Delete Ubicacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idubicacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ubicacion','url'=>array('admin')),
);
?>

<h1>View Ubicacion #<?php echo $model->idubicacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idubicacion',
		'direccion',
		'latitudlongitud',
		'barrioid',
		'propiedadid',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
	),
)); ?>
