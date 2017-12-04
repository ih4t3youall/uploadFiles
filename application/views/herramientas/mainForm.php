</html>
<head>
</head>
<body>

<?php 
echo validation_errors();

$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('herramientas/submitForm', $attributes);

$data = array(
        'name'          => 'nombre',
        'id'            => 'nombre',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo '<p>Nombre</p>';
echo form_input($data);

$data = array(
        'name'          => 'textoHerramienta',
        'id'            => 'textoHerramienta',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo '<p>Texto herramienta</p>';
echo form_input($data);

$data = array(
        'name'          => 'segundoTexto',
        'id'            => 'segundoTexto',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo '<p>seungdo texto</p>';
echo form_input($data);

$data = array(
        'name'          => 'vehiculo',
        'id'            => 'vehiculo',
        'value'         => TRUE,
        'checked'       => TRUE,
        'style'         => 'margin:10px'
);
echo '<p>vehiculo?</p>';
echo form_checkbox($data);

?>
<?php
echo '<br/>';
echo '<br/>';
echo '<br/>';
?>
<input type="submit" value="upload" />
<?php
echo form_close(); 
?>

</body>
</html>
