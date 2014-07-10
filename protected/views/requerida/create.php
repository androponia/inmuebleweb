<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Requerida','url'=>array('admin')),
);
?>

<h1>Crear Requerida</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>