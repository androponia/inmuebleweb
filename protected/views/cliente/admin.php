<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Cliente','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Clientes</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'cliente-grid',
	'dataProvider'=>$modelu->search(),
	'filter'=>$modelu,
	'pager'=>array(
            'header'=>'',//text before it
            'firstPageLabel'=>'Primera',
            'lastPageLabel'=>'Ultima',
            'nextPageLabel'=>'Siguiente',
            'prevPageLabel'=>'Anterior',
        ),
	'columns'=>array(
		'idusuario',
		'nombre',
		'apellido',
		'email',
		'telefono',
		'celular',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>
