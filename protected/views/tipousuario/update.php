<?php
/* @var $this TipousuarioController */
/* @var $model Tipousuario */

$this->breadcrumbs=array(
	'Tipousuarios'=>array('index'),
	$model->idtipousuario=>array('view','id'=>$model->idtipousuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipousuario', 'url'=>array('index')),
	array('label'=>'Create Tipousuario', 'url'=>array('create')),
	array('label'=>'View Tipousuario', 'url'=>array('view', 'id'=>$model->idtipousuario)),
	array('label'=>'Manage Tipousuario', 'url'=>array('admin')),
);
?>

<h1>Update Tipousuario <?php echo $model->idtipousuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>