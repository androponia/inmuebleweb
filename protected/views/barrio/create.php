<?php
$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barrio','url'=>array('index')),
	array('label'=>'Manage Barrio','url'=>array('admin')),
);
?>

<h1>Create Barrio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>