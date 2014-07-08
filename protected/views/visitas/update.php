<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->idvisitas=>array('view','id'=>$model->idvisitas),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Visita','url'=>array('create')),
	array('label'=>'Ver Visita','url'=>array('view','id'=>$model->idvisitas)),
	array('label'=>'Administrar Visitas','url'=>array('admin')),
);
?>

<h1>Actualizar Visita <?php echo $model->idvisitas; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>