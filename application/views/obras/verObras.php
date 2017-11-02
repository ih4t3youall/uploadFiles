<html>
<head>
</head>
<body>
<?php 

foreach ($result as $key){

				echo '<div class="obra">';
				$attributes = array('class' => 'email', 'id' => 'myform');
				echo form_open('obras/edit_photo', $attributes);

				$data = array(
												'name'          => ,
												'id'            => $k,
												'value'         => $v,
												'maxlength'     => '100',
												'size'          => '50',
												'style'         => 'width:50%'
										 );

				echo '<br/>';
				echo form_submit('Enviar', 'Enviar');
				echo form_close();
				echo '</div>';

				echo '<br/>';
}


?>
</body>
</html>
