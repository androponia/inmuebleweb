<?php
$this->breadcrumbs=array(
	'Imagens',
);

$this->menu=array(
	array('label'=>'Crear Imagen','url'=>array('create')),
	array('label'=>'Administrar Imagenes','url'=>array('admin')),
);
?>

<h1>Imagens</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
