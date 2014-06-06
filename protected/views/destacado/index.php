<?php
/* @var $this DestacadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Destacados',
);

$this->menu=array(
	array('label'=>'Create Destacado', 'url'=>array('create')),
	array('label'=>'Manage Destacado', 'url'=>array('admin')),
);
?>

<h1>Destacados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
