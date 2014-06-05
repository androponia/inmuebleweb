<?php
/* @var $this DestacadoController */
/* @var $model Destacado */

$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destacado', 'url'=>array('index')),
	array('label'=>'Manage Destacado', 'url'=>array('admin')),
);
?>

<h1>Create Destacado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>