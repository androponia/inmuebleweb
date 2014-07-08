<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Visitas','url'=>array('admin')),
);
?>

<h1>Crear Visita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>