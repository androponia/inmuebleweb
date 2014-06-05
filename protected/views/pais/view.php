<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->idpais,
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Update Pais', 'url'=>array('update', 'id'=>$model->idpais)),
	array('label'=>'Delete Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpais),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>View Pais #<?php echo $model->idpais; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpais',
		'nombre',
	),
)); ?>
