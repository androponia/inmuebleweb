<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

//CVarDumper::dump($arrayUrl,10,true);

//$imagen=$arrayUrl[0][0]->archivo;
//echo $imagen;

//Anda barbaro esto
//$ruta=Yii::app()->basePath.'/../images/1.jpg';
//echo $ruta;

?>

<div class="row divIndex">
	<!--Recorro 6 veces para generar los 6 carouseles-->
	<?php foreach ($arrayUrl as $key) {
		$var1=Yii::app()->basePath.'/images/'.$key[0]->archivo;
		$var2=Yii::app()->basePath.'/images/'.$key[1]->archivo;
		$var3=Yii::app()->basePath.'/images/'.$key[2]->archivo;

		$ruta1 = Yii::app()->assetManager->publish($var1);
		$ruta2 = Yii::app()->assetManager->publish($var2);
		$ruta3 = Yii::app()->assetManager->publish($var3);
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
					<br>
					<br>
				</div>
			</div>
		</a>
	</div>
	<?php
		}
	?>
</div>
