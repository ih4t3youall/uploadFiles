<html>
<head>
</head>
<body>

<?php

 echo validation_errors(); 

$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('obras/submitForm', $attributes);
echo '<p>Antecedentes</p>';
$data = array(
        'name'          => 'antecedentes',
        'id'            => 'antecedentes',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);
echo '<br/>';

echo '<label>Texto</label>';
echo '<br/>';
$data = array(
        'name'          => 'texto',
        'id'            => 'texto',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);

echo '<br/>';

echo '<label>Obras</label>';
echo '<br/>';
$data = array(
        'name'          => 'obra',
        'id'            => 'obra',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);


echo '<br/>';
echo '<label>Lugar</label>';
echo '<br/>';
$data = array(
        'name'          => 'lugar',
        'id'            => 'lugar',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);

echo '<br/>';

echo '<label>Planta</label>';
echo '<br/>';
$data = array(
        'name'          => 'planta',
        'id'            => 'planta',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);

echo '<br/>';
echo '<label>Cliente</label>';
echo '<br/>';
$data = array(
        'name'          => 'cliente',
        'id'            => 'cliente',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);
echo '<br/>';


echo '<label>Anio</label>';
echo '<br/>';
$data = array(
        'name'          => 'anio',
        'id'            => 'anio',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo form_input($data);
echo '<br/>';

echo '<label>Descripcion Tareas Realizadas</label>';
echo '<br/>';

$data = array(
        'name'          => 'desc_tar_realiz',
        'id'            => 'desc_tar_realiz',
        'value'         => '',
        'maxlength'     => '5000',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo form_input($data);
echo '<br/>';
echo '<label>Tipo</label>';
echo '<br/>';

$options = array(
        'proyecto'         => 'proyecto',
        'obra'           => 'obra',
        'equipo'         => 'equipo',
        'vehiculo'         => 'vehiculo',
        'herramienta'         => 'herramienta',
        'instalaciones'        => 'instalaciones',
);


echo form_dropdown('categoria', $options, 'nose');


echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<input type="submit" value="Submit">';
echo form_close(); 
?>

</body>
</html>
