<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$modele->idusuario=>array('view','id'=>$modele->idusuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Empleado','url'=>array('create')),
	array('label'=>'Ver Empleado','url'=>array('view','id'=>$modele->idusuario)),
	array('label'=>'Administrar Empleado','url'=>array('admin')),
);
?>

<h1>Actualizar Empleado <?php echo $modele->idusuario; ?></h1>

<?php echo $this->renderPartial('_form',array('modele'=>$modele, 'modelu'=>$modelu)); ?>