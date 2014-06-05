<?php
/* @var $this PropiedadController */
/* @var $model Propiedad */

$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	$model->idpropiedad,
);

$this->menu=array(
	array('label'=>'List Propiedad', 'url'=>array('index')),
	array('label'=>'Create Propiedad', 'url'=>array('create')),
	array('label'=>'Update Propiedad', 'url'=>array('update', 'id'=>$model->idpropiedad)),
	array('label'=>'Delete Propiedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpropiedad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propiedad', 'url'=>array('admin')),
);
?>

<h1>View Propiedad #<?php echo $model->idpropiedad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpropiedad',
		'canthab',
		'cantbano',
		'terreno',
		'construido',
		'precio',
		'descripcion',
		'ingreso',
		'egreso',
		'clienteid',
		'empleadoid',
	),
)); ?>
