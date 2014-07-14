<!-- CVarDumper::dump($ubicaciones,10,true);?> -->
<?php 

if(empty($propiedades))
{
	echo '"No hay inmuebles en ese barrio"';
}
else
{

	$i = 0;
	foreach ($propiedades as $key){

		echo 'ID PROPIEDAD: '.$key[0]['idpropiedad'].'<br>';
		echo 'DIRECCION: '.$ubicaciones[$i]['direccion'].'<br>';
		echo 'PRECIO: '.$key[0]['precio'].'<br>';
		echo 'HABITACIONES: '.$key[0]['canthab'].'<br>';
		echo 'BAÑOS: '.$key[0]['cantbano'].'<br>';
		echo 'GARAGE: '.$key[0]['garage'].'<br>';
		echo 'JARDIN: '.$key[0]['jardin'].'<br>';
		echo 'METROS TERRENO: '.$key[0]['terreno'].'<br>';
		echo 'METROS CONSTRUIDOS: '.$key[0]['construido'].'<br>';
		echo 'DESCRIPCION: '.$key[0]['descripcion'].'<br><br><br>';
		$i= $i+1;
	}
}
?>