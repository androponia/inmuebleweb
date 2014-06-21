<?php
$this->breadcrumbs=array(
	'Barrios',
);

$this->menu=array(
	array('label'=>'Create Barrio','url'=>array('create')),
	array('label'=>'Manage Barrio','url'=>array('admin')),
);
?>

<h1>Barrios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
