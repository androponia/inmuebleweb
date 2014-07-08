<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->idimagen,
);

$this->menu=array(
	array('label'=>'Crear Imagen','url'=>array('create')),
	array('label'=>'Actualizar Imagen','url'=>array('update','id'=>$model->idimagen)),
	array('label'=>'Eliminar Imagen','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idimagen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Imagenes','url'=>array('admin')),
);
?>

<h1>View Imagen #<?php echo $model->idimagen; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idimagen',
		'archivo',
		'orden',
		'propiedadid',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
	),
)); ?>
