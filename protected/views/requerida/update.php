<?php
/* @var $this RequeridaController */
/* @var $model Requerida */

$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	$model->idrequerida=>array('view','id'=>$model->idrequerida),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requerida', 'url'=>array('index')),
	array('label'=>'Create Requerida', 'url'=>array('create')),
	array('label'=>'View Requerida', 'url'=>array('view', 'id'=>$model->idrequerida)),
	array('label'=>'Manage Requerida', 'url'=>array('admin')),
);
?>

<h1>Update Requerida <?php echo $model->idrequerida; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>