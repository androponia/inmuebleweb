<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idbarrio=>array('view','id'=>$model->idbarrio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barrio','url'=>array('index')),
	array('label'=>'Create Barrio','url'=>array('create')),
	array('label'=>'View Barrio','url'=>array('view','id'=>$model->idbarrio)),
	array('label'=>'Manage Barrio','url'=>array('admin')),
);
?>

<h1>Update Barrio <?php echo $model->idbarrio; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>