<?php
$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Destacado','url'=>array('create')),
);
?>

<h1>Administrar Destacados</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'destacado-grid',
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
		'iddestacado',
		'fechainicio',
		'fechafin',
		'idpropiedad',
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{view}{update}{delete}',
    		'header'=>"Herramientas",
		)
	),
)); ?>

