<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idusuario=>array('view','id'=>$model->idusuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleado','url'=>array('index')),
	array('label'=>'Create Empleado','url'=>array('create')),
	array('label'=>'View Empleado','url'=>array('view','id'=>$model->idusuario)),
	array('label'=>'Manage Empleado','url'=>array('admin')),
);
?>

<h1>Update Empleado <?php echo $model->idusuario; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>