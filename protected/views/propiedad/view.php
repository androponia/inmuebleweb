<?php
$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	$model->idpropiedad,
);

$this->menu=array(
);
?>

<h1>Imagenes y Ubicacion de la Propiedad #<?php echo $model->idpropiedad; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idpropiedad',
		'descripcion',
	),
)); ?>

<?php $idpropiedad = $model->idpropiedad; ?>


<h5>Ingresar Imagenes</h5>
<?php echo CHtml::link('Imagen 1 ',array('/imagen/create/',
                                         'idpropiedad'=>$idpropiedad,
                                         'orden'=>1)); ?>

<?php echo CHtml::link('Imagen 2 ',array('/imagen/create/',
                                         'idpropiedad'=>$idpropiedad,
                                         'orden'=>2)); ?>

<?php echo CHtml::link('Imagen 3 ',array('/imagen/create/',
                                         'idpropiedad'=>$idpropiedad,
                                         'orden'=>3)); ?>

<h5>Ingresar ubicacion</h5>
<?php echo CHtml::link('Ubicacion',array('/ubicacion/create/',
                                         'idpropiedad'=>$idpropiedad)); ?>

<h3>Administrar Propiedades</h3>
<?php echo CHtml::link('Administrar Propiedades',array('/propiedad/admin/',
                                         'idpropiedad'=>$idpropiedad)); ?>