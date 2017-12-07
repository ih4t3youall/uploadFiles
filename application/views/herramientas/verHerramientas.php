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
function cambiarNombreImagen(id_image){


				$.post( "update_image", { 'id_image': id_image,'texto': $("#imageText"+id_image).val()})
								.done(function( data ) {
																alert( "se modifico la imagen.");
																});

}
</script>
</head>
<body>
<h1> la concha de tu madre allboys</h1>
<?php 
foreach ($herramientas as $key){

				$attributes = array('class' => 'email', 'id' => 'myform');
				echo form_open('herramientas/modificarHerramienta', $attributes);


				$id_herramienta = array(
												'name'          => 'id_herramienta',
												'id'            => $key['id_herramienta'],
												'value'         => $key['id_herramienta'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);
				$nombre = array(
												'name'          => 'nombre',
												'id'            => $key['nombre'],
												'value'         => $key['nombre'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);
				$textoHerramienta = array(
												'name'          => 'textoHerramienta',
												'id'            => $key['textoHerramienta'],
												'value'         => $key['textoHerramienta'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				$segundoTexto = array(
												'name'          => 'segundoTexto',
												'id'            => $key['segundoTexto'],
												'value'         => $key['segundoTexto'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				$url = array(
												'name'          => 'url',
												'id'            => $key['url'],
												'value'         => $key['url'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				echo form_input($id_herramienta);
				echo form_input($nombre);
				echo form_input($nombre);
				echo form_input($textoHerramienta);
				echo form_input($segundoTexto);
				echo form_input($url);

				echo '<img src="'.base_url().'uploads/'.$key['url'].'" height="500px" width="500px"/>';	
				echo form_submit('Anhadir imagen', 'submit!');
				echo form_close();
}
?>
</body>
</html>