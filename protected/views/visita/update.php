<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->idvisita=>array('view','id'=>$model->idvisita),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visita', 'url'=>array('index')),
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'View Visita', 'url'=>array('view', 'id'=>$model->idvisita)),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>Update Visita <?php echo $model->idvisita; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>