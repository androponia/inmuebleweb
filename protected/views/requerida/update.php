<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	$model->idrequerida=>array('view','id'=>$model->idrequerida),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Requerida','url'=>array('create')),
	array('label'=>'Ver Requerida','url'=>array('view','id'=>$model->idrequerida)),
	array('label'=>'Administrar Requeridas','url'=>array('admin')),
);
?>

<h1>Actualizar Propiedad Requerida <?php echo $model->idrequerida; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>