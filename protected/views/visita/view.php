<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->idvisita,
);

$this->menu=array(
	array('label'=>'List Visita', 'url'=>array('index')),
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Update Visita', 'url'=>array('update', 'id'=>$model->idvisita)),
	array('label'=>'Delete Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idvisita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>View Visita #<?php echo $model->idvisita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idvisita',
		'idpropiedad',
		'fecha',
	),
)); ?>
