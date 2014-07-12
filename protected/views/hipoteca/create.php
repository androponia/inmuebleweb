<?php
$this->breadcrumbs=array(
	'Hipotecas'=>array('index'),
	'Create',
);

$this->menu=array(
);
?>

<h1>Calculo Hipoteca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>