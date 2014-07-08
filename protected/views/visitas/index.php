<?php
$this->breadcrumbs=array(
	'Visitases',
);

$this->menu=array(
	array('label'=>'Crear Visita','url'=>array('create')),
	array('label'=>'Administrar Visitas','url'=>array('admin')),
);
?>

<h1>Visitas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
