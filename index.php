<?php
// index.php

// ubicacion XML online y local
define('XML', 'http://datos.gijon.es/doc/turismo/playas.xml');
define('XMLlocal', 'playas.xml'); 

// leer XML validamos si el fichero online e accesible y si no abrimos el XML local
if($data = simplexml_load_file(XML)){
}
else{
	$data = simplexml_load_file(XMLlocal);
}

?>

<html>
<h1>Playas de Gijón</h1>

<?php
	//bucle para recorrer los elementos del array
	foreach($data as $item){
?>
	<table border="1">
		<tr>
			<td>Nombre: </td>
			<td>
				<?php echo $item->nombre; ?>	
			</td>
		</tr>
		<tr>
			<td>URL: </td>
			<td>
				<?php echo $item->url; ?>
			</td>
		</tr>
		<tr>
			<td>Descripcion: </td>
			<td>
				<?php echo $item->descripcion; ?>	
			</td>
		</tr>
		<tr>
			<td>Direccion: </td>
			<td>
				<?php echo $item->direccion; ?>	
			</td>
		</tr>
		<tr>
			<td>Foto: </td>
			<td>
				<?php echo '<img src=' . $item->foto . '/>'; ?>
			</td>
		</tr>
		<tr>
			<td>Localizacion: </td>
			<td>
				<?php echo '<a href="https://www.google.com/maps/place/' . $item->localizacion . '">' . $item->localizacion . '</a>'; ?>
			</td>
		</tr>
	</table><br />
<?php 
	} //cerramos bucle
?>

</html>