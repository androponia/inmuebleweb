<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->idimagen=>array('view','id'=>$model->idimagen),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Imagen','url'=>array('create')),
	array('label'=>'Ver Imagen','url'=>array('view','id'=>$model->idimagen)),
	array('label'=>'Administrar Imagenes','url'=>array('admin')),
);
?>

<h1>Actualizar Imagen <?php echo $model->idimagen; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>