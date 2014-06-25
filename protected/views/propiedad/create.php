<?php
$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propiedad','url'=>array('index')),
	array('label'=>'Manage Propiedad','url'=>array('admin')),
);
?>

<h1>Create Propiedad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>