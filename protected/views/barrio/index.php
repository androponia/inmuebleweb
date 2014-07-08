<?php
$this->breadcrumbs=array(
	'Barrios',
);

$this->menu=array(
	array('label'=>'Crear Barrio','url'=>array('create')),
	array('label'=>'Administrar Barrios','url'=>array('admin')),
);
?>

<h1>Barrios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
