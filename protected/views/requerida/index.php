<?php
/* @var $this RequeridaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Requeridas',
);

$this->menu=array(
	array('label'=>'Create Requerida', 'url'=>array('create')),
	array('label'=>'Manage Requerida', 'url'=>array('admin')),
);
?>

<h1>Requeridas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
