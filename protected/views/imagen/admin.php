<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Imagen','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imagen-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Imagenes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'imagen-grid',
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
		'idimagen',
		'archivo',
		'orden',
		'propiedadid',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
