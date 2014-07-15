<!-- CVarDumper::dump($ubicaciones,10,true);?> -->
<?php 

if(empty($propiedades))
{
	echo '"No hay inmuebles en ese barrio"';
}
else
{
	echo '<div class="container">';
	echo '<div clss="row">';
	$i = 0;
	foreach ($propiedades as $key){
		
		echo '<a class="enlacePropiedad" href="#">';
		echo '<div class="contPropiedad">';
		echo '<div class="contPropInfo" style="float:left;margin-left:15px;margin-top: 15px;width:250px; height: 200px; ">';
		//echo 'ID PROPIEDAD: '.$key[0]['idpropiedad'].'<br>';
		echo '<strong>DIRECCION: </strong>'.$ubicaciones[$i]['direccion'].'<br>';
		echo '<strong>PRECIO: </strong>'.$key[0]['precio'].'<br>';
		echo '<strong>HABITACIONES: </strong>'.$key[0]['canthab'].'<br>';
		echo '<strong>BAÑOS: </strong>'.$key[0]['cantbano'].'<br>';
		echo '<strong>GARAGE: </strong>'.$key[0]['garage'].'<br>';
		echo '<strong>JARDIN: </strong>'.$key[0]['jardin'].'<br>';
		echo '<strong>METROS TERRENO: </strong>'.$key[0]['terreno'].'<br>';
		echo '<strong>METROS CONSTRUIDOS: </strong>'.$key[0]['construido'].'<br>';
		echo '<strong>DESCRIPCION: </strong>'.$key[0]['descripcion'].'<br><br><br>';
		echo '</div>';
		echo '</div>';
		echo '</a>';
		$i= $i+1;
	}
		
		echo '</div>';//div row
		echo '</div>';//div container

}
?>