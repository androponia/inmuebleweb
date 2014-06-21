<?php
$this->breadcrumbs=array(
	'Requeridas',
);

$this->menu=array(
	array('label'=>'Create Requerida','url'=>array('create')),
	array('label'=>'Manage Requerida','url'=>array('admin')),
);
?>

<h1>Requeridas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
