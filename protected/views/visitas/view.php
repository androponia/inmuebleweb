<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->idvisitas,
);

$this->menu=array(
	array('label'=>'List Visitas','url'=>array('index')),
	array('label'=>'Create Visitas','url'=>array('create')),
	array('label'=>'Update Visitas','url'=>array('update','id'=>$model->idvisitas)),
	array('label'=>'Delete Visitas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idvisitas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitas','url'=>array('admin')),
);
?>

<h1>View Visitas #<?php echo $model->idvisitas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idvisitas',
		'idpropiedad',
		'fecha',
		'hora',
		'created_date',
		'modified_date',
		'created_by',
		'modified_by',
	),
)); ?>
