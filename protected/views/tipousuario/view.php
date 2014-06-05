<?php
/* @var $this TipousuarioController */
/* @var $model Tipousuario */

$this->breadcrumbs=array(
	'Tipousuarios'=>array('index'),
	$model->idtipousuario,
);

$this->menu=array(
	array('label'=>'List Tipousuario', 'url'=>array('index')),
	array('label'=>'Create Tipousuario', 'url'=>array('create')),
	array('label'=>'Update Tipousuario', 'url'=>array('update', 'id'=>$model->idtipousuario)),
	array('label'=>'Delete Tipousuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipousuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipousuario', 'url'=>array('admin')),
);
?>

<h1>View Tipousuario #<?php echo $model->idtipousuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipousuario',
		'nombre',
	),
)); ?>
