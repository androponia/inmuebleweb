<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	$model->iddestacado=>array('view','id'=>$model->iddestacado),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Destacado','url'=>array('create')),
	array('label'=>'Ver Destacado','url'=>array('view','id'=>$model->iddestacado)),
	array('label'=>'Administrar Destacados','url'=>array('admin')),
);
?>

<h1>Actualizar Destacado <?php echo $model->iddestacado; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>