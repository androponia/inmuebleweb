<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->idciudad,
);

$this->menu=array(
	array('label'=>'List Ciudad', 'url'=>array('index')),
	array('label'=>'Create Ciudad', 'url'=>array('create')),
	array('label'=>'Update Ciudad', 'url'=>array('update', 'id'=>$model->idciudad)),
	array('label'=>'Delete Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idciudad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ciudad', 'url'=>array('admin')),
);
?>

<h1>View Ciudad #<?php echo $model->idciudad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idciudad',
		'nombre',
		'dptoid',
	),
)); ?>
