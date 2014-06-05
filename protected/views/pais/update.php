<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->idpais=>array('view','id'=>$model->idpais),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'View Pais', 'url'=>array('view', 'id'=>$model->idpais)),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>Update Pais <?php echo $model->idpais; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>