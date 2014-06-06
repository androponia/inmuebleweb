<?php
/* @var $this VisitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitas',
);

$this->menu=array(
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>Visitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
