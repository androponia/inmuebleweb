<?php
$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Ubicacion','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ubicacion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ubicacions</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubicacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array(
            'header'=>'',//text before it
            'firstPageLabel'=>'Primera',
            'lastPageLabel'=>'Ultima',
            'nextPageLabel'=>'Siguiente',
            'prevPageLabel'=>'Anterior',
        ),
	'columns'=>array(
		'idubicacion',
		'direccion',
		'latitudlongitud',
		'barrioid',
		'propiedadid',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
