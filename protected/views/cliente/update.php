<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$modelc->idusuario=>array('view','id'=>$modelc->idusuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Cliente','url'=>array('create')),
	array('label'=>'Ver Cliente','url'=>array('view','id'=>$modelc->idusuario)),
	array('label'=>'Administrar Clientes','url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $modelc->idusuario; ?></h1>

<?php echo $this->renderPartial('_form',array('modelc'=>$modelc, 'modelu'=>$modelu)); ?>