<?php
$this->breadcrumbs=array(
	'Destacados',
);

$this->menu=array(
	array('label'=>'Create Destacado','url'=>array('create')),
	array('label'=>'Manage Destacado','url'=>array('admin')),
);
?>

<h1>Destacados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
