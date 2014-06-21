<?php
$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->idvisitas=>array('view','id'=>$model->idvisitas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visitas','url'=>array('index')),
	array('label'=>'Create Visitas','url'=>array('create')),
	array('label'=>'View Visitas','url'=>array('view','id'=>$model->idvisitas)),
	array('label'=>'Manage Visitas','url'=>array('admin')),
);
?>

<h1>Update Visitas <?php echo $model->idvisitas; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>