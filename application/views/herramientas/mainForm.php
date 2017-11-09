</html>
<head>
</head>
<body>


<?php 
echo validation_errors();


$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('obras/submitForm', $attributes);


$data = array(
        'name'          => 'nombre',
        'id'            => 'nombre',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);
$data = array(
        'name'          => 'textoHerramienta',
        'id'            => 'textoHerramienta',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);

echo '<input type="submit" value="Submit">';
echo form_close(); 





?>


</body>
</html>
