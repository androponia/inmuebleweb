<?php
$this->breadcrumbs=array(
	'Destacados',
);

$this->menu=array(
	array('label'=>'Crear Destacado','url'=>array('create')),
	array('label'=>'Administrar Destacados','url'=>array('admin')),
);
?>

<h1>Destacados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
