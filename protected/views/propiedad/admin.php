<?php
$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Propiedad','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('propiedad-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Propiedades</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'propiedad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array(
            'header'=>'Paginas',//text before it
            'firstPageLabel'=>'Primera',
            'lastPageLabel'=>'Ultima',
            'nextPageLabel'=>'Siguiente',
            'prevPageLabel'=>'Anterior',
        ),
	'columns'=>array(
		'idpropiedad',
		'canthab',
		'cantbano',
		'terreno',
		'construido',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>
