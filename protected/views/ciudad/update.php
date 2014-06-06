<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->idciudad=>array('view','id'=>$model->idciudad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ciudad', 'url'=>array('index')),
	array('label'=>'Create Ciudad', 'url'=>array('create')),
	array('label'=>'View Ciudad', 'url'=>array('view', 'id'=>$model->idciudad)),
	array('label'=>'Manage Ciudad', 'url'=>array('admin')),
);
?>

<h1>Update Ciudad <?php echo $model->idciudad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>