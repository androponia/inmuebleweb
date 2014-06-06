<?php
/* @var $this DestacadoController */
/* @var $model Destacado */

$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	$model->iddestacado=>array('view','id'=>$model->iddestacado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Destacado', 'url'=>array('index')),
	array('label'=>'Create Destacado', 'url'=>array('create')),
	array('label'=>'View Destacado', 'url'=>array('view', 'id'=>$model->iddestacado)),
	array('label'=>'Manage Destacado', 'url'=>array('admin')),
);
?>

<h1>Update Destacado <?php echo $model->iddestacado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>