<?php
$this->breadcrumbs=array(
	'Requeridas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Requerida','url'=>array('index')),
	array('label'=>'Manage Requerida','url'=>array('admin')),
);
?>

<h1>Create Requerida</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>