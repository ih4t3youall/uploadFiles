<html>
<head>
</head>
<body>
<?php 

foreach ($result as $key){

				echo '<div class="obra">';
				$attributes = array('class' => 'email', 'id' => 'myform');
				echo form_open('obras/edit_photo', $attributes);

				$antecedentes = array(
												'name'          => $key['antecedentes'],
												'id'            => $key['antecedentes'],
												'value'         => $key['antecedentes'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				$texto = array(
												'name'          => $key['texto'],
												'id'            => $key['texto'],
												'value'         => $key['texto'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
											);
				$obra = array(
												'name'          => $key['obra'],
												'id'            => $key['obra'],
												'value'         => $key['obra'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
										 );
				$lugar = array(
												'name'          => $key['lugar'],
												'id'            => $key['lugar'],
												'value'         => $key['lugar'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
											);
				$planta = array(
												'name'          => $key['planta'],
												'id'            => $key['planta'],
												'value'         => $key['planta'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
											 );
				$cliente = array(
												'name'          => $key['cliente'],
												'id'            => $key['cliente'],
												'value'         => $key['cliente'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				$anio = array(
												'name'          => $key['anio'],
												'id'            => $key['anio'],
												'value'         => $key['anio'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
										 );
				$desc_tar_realiz = array(
												'name'          => $key['desc_tar_realiz'],
												'id'            => $key['desc_tar_realiz'],
												'value'         => $key['desc_tar_realiz'],
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
												);

				echo form_input($antecedentes);
				echo form_input($texto);
				echo form_input($obra);
				echo form_input($lugar);
				echo form_input($planta);
				echo form_input($cliente);
				echo form_input($anio);
				echo form_input($desc_tar_realiz);

				$images= $key['imagenes'];
				echo '<br/>';
				echo '<br/>';
				foreach ($images as $key ){
								echo '<div id="'.$key['id_images'].'">';

								$id_imagen = array(
																'type'				  => 'hidden',	
																'name'          => $key['id_images'],
																'id'            => $key['id_images'],
																'value'         => $key['id_images'],
																'maxlength'     => '100',
																'size'          => '50',
																'style'         => 'width:50%'
																);
								echo form_input($id_imagen);

								echo '<img src="'.base_url().'uploads/'.$key['url'].'" height="500px" width="500px"/>';	


								echo '<div/>'; 
				}
				echo '<br/>';
				echo form_submit('Enviar', 'Enviar');
				echo form_close();
				echo '</div>';

				echo '<br/>';
}


?>
</body>
</html>
