<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	$model->iddestacado,
);

$this->menu=array(
	array('label'=>'List Destacado','url'=>array('index')),
	array('label'=>'Create Destacado','url'=>array('create')),
	array('label'=>'Update Destacado','url'=>array('update','id'=>$model->iddestacado)),
	array('label'=>'Delete Destacado','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->iddestacado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Destacado','url'=>array('admin')),
);
?>

<h1>View Destacado #<?php echo $model->iddestacado; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'iddestacado',
		'fechainicio',
		'fechafin',
		'idpropiedad',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
	),
)); ?>
