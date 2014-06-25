<?php
$this->breadcrumbs=array(
	'Empleados',
);

$this->menu=array(
	array('label'=>'Crear Empleado','url'=>array('create')),
	array('label'=>'Administrar Empleado','url'=>array('admin')),
);
?>

<h1>Empleados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
