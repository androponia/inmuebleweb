<?php
$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Create',
);

$this->menu=array(

);
?>

<h1>Crear Ubicacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>