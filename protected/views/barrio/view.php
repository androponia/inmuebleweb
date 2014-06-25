<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idbarrio,
);

$this->menu=array(
	array('label'=>'List Barrio','url'=>array('index')),
	array('label'=>'Create Barrio','url'=>array('create')),
	array('label'=>'Update Barrio','url'=>array('update','id'=>$model->idbarrio)),
	array('label'=>'Delete Barrio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idbarrio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barrio','url'=>array('admin')),
);
?>

<h1>View Barrio #<?php echo $model->idbarrio; ?></h1>

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
