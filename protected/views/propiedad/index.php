<?php
$this->breadcrumbs=array(
	'Propiedads',
);

$this->menu=array(
	array('label'=>'Crear Propiedad','url'=>array('create')),
	array('label'=>'Administrar Propiedades','url'=>array('admin')),
);
?>

<h1>Propiedades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
