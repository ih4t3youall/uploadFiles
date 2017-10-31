<html>
<head>
</head>
<body>
<?php 

foreach ($result as $key){

echo '<div class="obra">';
$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('obras/edit_photo', $attributes);

foreach($key as $k => $v){
$data = array(
        'name'          => $k,
        'id'            => $k,
        'value'         => $v,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);
if ((strcmp($k, 'id_images') == 0) || (strcmp($k, 'id_obra') == 0)) {
$data['type']='hidden';
echo form_input($data);
}else {
echo form_input($data);
}

echo '<br/>';
}
echo form_submit('Enviar', 'Enviar');
echo form_close();
echo '</div>';

echo '<br/>';
}


?>
</body>
</html>
