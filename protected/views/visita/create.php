<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Visita', 'url'=>array('index')),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>Create Visita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>