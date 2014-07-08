<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idbarrio=>array('view','id'=>$model->idbarrio),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Barrio','url'=>array('create')),
	array('label'=>'Ver Barrio','url'=>array('view','id'=>$model->idbarrio)),
	array('label'=>'Administrar Barrios','url'=>array('admin')),
);
?>

<h1>Actualizar Barrio <?php echo $model->idbarrio; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>