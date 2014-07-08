<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Destacados','url'=>array('admin')),
);
?>

<h1>Crear Destacado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>