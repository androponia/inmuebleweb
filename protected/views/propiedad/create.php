<?php
$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Propiedades','url'=>array('admin')),
);
?>

<h1>Crear Propiedad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>