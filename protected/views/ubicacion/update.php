<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idubicacion=>array('view','id'=>$model->idubicacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ubicacion', 'url'=>array('index')),
	array('label'=>'Create Ubicacion', 'url'=>array('create')),
	array('label'=>'View Ubicacion', 'url'=>array('view', 'id'=>$model->idubicacion)),
	array('label'=>'Manage Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Update Ubicacion <?php echo $model->idubicacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>