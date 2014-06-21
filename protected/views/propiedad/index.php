<?php
$this->breadcrumbs=array(
	'Propiedads',
);

$this->menu=array(
	array('label'=>'Create Propiedad','url'=>array('create')),
	array('label'=>'Manage Propiedad','url'=>array('admin')),
);
?>

<h1>Propiedads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
