<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Imagenes','url'=>array('admin')),
);
?>

<h1>Crear Imagen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>