<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->idimagen=>array('view','id'=>$model->idimagen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'View Imagen', 'url'=>array('view', 'id'=>$model->idimagen)),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>Update Imagen <?php echo $model->idimagen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>