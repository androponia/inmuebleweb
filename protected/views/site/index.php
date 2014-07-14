<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

//CVarDumper::dump($arrayUrl,10,true);

//$imagen=$arrayUrl[0][0]->archivo;
//echo $imagen;

//Anda barbaro esto
//$ruta=Yii::app()->baseUrl.'/images/'.$imagen;
//echo $ruta;

?>

<div class="row divIndex">
	<!--Recorro 6 veces para generar los 6 carouseles-->
	<?php foreach ($arrayUrl as $key) {
		$ruta1=Yii::app()->baseUrl.'/images/'.$key[0]->archivo;
		$ruta2=Yii::app()->baseUrl.'/images/'.$key[1]->archivo;
		$ruta3=Yii::app()->baseUrl.'/images/'.$key[2]->archivo;
	?>
	<div class="col-md-4 col-xs-12">
		<a href="#">
			<div class="contDestacada">
				<div class="carouselDestacada">
					<?php $this->widget('bootstrap.widgets.TbCarousel', array(
						'items'=>array(	
							array('image'=>$ruta1, 'label'=>''),
							array('image'=>$ruta2, 'label'=>''),
							array('image'=>$ruta3, 'label'=>''),
						),
					)); ?>
				</div>
				<div class="infoDestacada">
					<center>
						<label>Ubicacion: </label><br>
						<label>Precio: </label>
					</center>
				</div>
			</div>
		</a>
	</div>
	<?php
		}
	?>
</div>

