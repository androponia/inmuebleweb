<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idbarrio,
);

$this->menu=array(
	array('label'=>'List Barrio', 'url'=>array('index')),
	array('label'=>'Create Barrio', 'url'=>array('create')),
	array('label'=>'Update Barrio', 'url'=>array('update', 'id'=>$model->idbarrio)),
	array('label'=>'Delete Barrio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbarrio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barrio', 'url'=>array('admin')),
);
?>

<h1>View Barrio #<?php echo $model->idbarrio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbarrio',
		'nombre',
		'ciudadid',
	),
)); ?>
