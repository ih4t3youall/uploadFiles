<html>
<head>
<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function deleteImage(id_image){

	$.post( "deleteImage", { 'id_image': id_image })
		.done(function( data ) {
			alert( "se elimino la imagen: " + data );
			$("#"+id_image).hide();
		});
}

function deleteObra(id_obra){

	alert('hello: '+id_obra);
	$.post("deleteObra", {'id_obra':id_obra}).done(function(data){
		alert("aca borro el id "+id_obra);
	}).fail(function(data){
	
		alert(data);
		console.log(data);
	
	});
}

function cambiarNombreImagen(id_image){


	$.post( "update_image", { 'id_image': id_image,'texto': $("#imageText"+id_image).val()})
		.done(function( data ) {
			alert( "se modifico la imagen.");
		});

}
</script>
</head>
<body>
<?php 

foreach ($result as $key){

	echo '<div class="obra">';
	//add imagen

	$addImagen = array(
		'type'				  => 'hidden',	
		'name'          =>'id_obra',
		'id'            => $key['id_obra'],
		'value'         => $key['id_obra'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	echo form_open("upload/do_upload");

	echo form_input($addImagen);
	echo form_submit('Anhadir imagen', 'Anhadir imagen');
	echo form_close();
	//fin add imagen
	$attributes = array('class' => 'email', 'id' => 'myform');
	echo form_open('obras/edit_photo', $attributes);

	$antecedentes = array(
		'name'          => 'antecedentes',
		'id'            => $key['antecedentes'],
		'value'         => $key['antecedentes'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);

	$texto = array(
		'name'          => 'texto',
		'id'            => $key['texto'],
		'value'         => $key['texto'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	$obra = array(
		'name'          => 'obra',
		'id'            => $key['obra'],
		'value'         => $key['obra'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	$lugar = array(
		'name'          => 'lugar',
		'id'            => $key['lugar'],
		'value'         => $key['lugar'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	$planta = array(
		'name'          => 'planta',
		'id'            => $key['planta'],
		'value'         => $key['planta'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	$cliente = array(
		'name'          => 'cliente',
		'id'            => $key['cliente'],
		'value'         => $key['cliente'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);

	$anio = array(
		'name'          => 'anio',
		'id'            => $key['anio'],
		'value'         => $key['anio'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);
	$desc_tar_realiz = array(
		'name'          => 'desc_tar_realiz',
		'id'            => $key['desc_tar_realiz'],
		'value'         => $key['desc_tar_realiz'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);


	$options = array(
		'proyecto'         => 'proyecto',
		'obra'           => 'obra',
		'equipo'         => 'equipo',
		'vehiculo'         => 'vehiculo',
		'herramienta'         => 'herramienta',
		'instalaciones'        => 'instalaciones',
	);

	$id_obra = array(
		'type'		=> 'hidden',	
		'name'          => 'id_obra',
		'id'            => $key['id_obra'],
		'value'         => $key['id_obra'],
		'maxlength'     => '100',
		'size'          => '50',
		'style'         => 'width:50%'
	);

	echo form_input($id_obra);
	echo form_input($antecedentes);
	echo form_input($texto);
	echo form_input($obra);
	echo form_input($lugar);
	echo form_input($planta);
	echo form_input($cliente);
	echo form_input($anio);
	echo form_input($desc_tar_realiz);
	echo '<br>';
	echo form_dropdown('categoria', $options, $key['tipo']);
	echo '<br>';
	echo form_submit('Enviar', 'Enviar');
	echo form_close();
	$images= $key['imagenes'];
	echo '<br/>';
	echo '<br/>';
	echo '<div class="row">';
	foreach ($images as $key ){

		$id_imagen = array(
			'type'	      => 'hidden',	
			'name'        => 'id_images',
			'id'          => $key['id_images'],
			'value'       => $key['id_images'],
			'maxlength'   => '100',
			'size'        => '50',
			'style'       => 'width:50%'
		);
		$textoImagen = array(
			'name'        => 'textoImagen',
			'id'          => 'imageText'.$key['id_images'],
			'value'       => $key['textoImagen'],
			'maxlength'   => '100',
			'size'        => '50',
			'style'       => 'width:50%'
		);
		$url = array(
			'type'	      		  => 'hidden',	
			'name'        => 'url',
			'id'          => $key['url'],
			'value'       => $key['url'],
			'maxlength'   => '100',
			'size'        => '50',
			'style'       => 'width:50%'
		);

		echo '<div class="col-6" id="'.$key['id_images'].'">';      
		echo form_input($id_imagen);
		echo form_input($url);
		echo form_input($textoImagen);
		echo '<input type="button" value="cambiarNombre" onclick="cambiarNombreImagen('.$key['id_images'].')"/>';
		echo '<img src="'.base_url().'uploads/'.$key['url'].'" height="500px" width="500px"/>';	
		echo '<input type="button" value="eliminar" onclick="deleteImage('.$key['id_images'].')"/>';
		echo '</div />';  

	}



	echo '</div >';

	echo '<br/>';

	echo '<br/>';


	echo '<input type="button" value="borrar" onclick="deleteObra('.$key['id_obra'].')"/>';
	echo '<hr/>';
}
echo '<form action="'.base_url().'index.php/main">';
echo    '<input type="submit" value="volver" />';
echo '</form>';


?>
</body>
</html>
