<?php
$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	$model->idpropiedad=>array('view','id'=>$model->idpropiedad),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Propiedad','url'=>array('create')),
	array('label'=>'Insertar Imagenes y Ubicacio a Propiedad','url'=>array('view','id'=>$model->idpropiedad)),
	array('label'=>'Administrar Propiedades','url'=>array('admin')),
);
?>

<h1>Actualizar Propiedad <?php echo $model->idpropiedad; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>