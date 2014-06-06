<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ubicacion', 'url'=>array('index')),
	array('label'=>'Manage Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Create Ubicacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>