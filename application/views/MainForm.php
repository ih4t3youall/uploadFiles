<html>
<head>
</head>
<body>

<?php

 echo validation_errors(); 

$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('main/submitForm', $attributes);
echo '<p>Antecedentes</p>';
$data = array(
        'name'          => 'antecedentes',
        'id'            => 'antecedentes',
        'value'         => '',
        'maxlength'     => '100',
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
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);

echo '<br/>';

echo '<label>Obras</label>';
echo '<br/>';
$data = array(
        'name'          => 'obras',
        'id'            => 'obras',
        'value'         => '',
        'maxlength'     => '100',
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
        'maxlength'     => '100',
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
        'maxlength'     => '100',
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
        'maxlength'     => '100',
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
        'maxlength'     => '100',
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
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);
echo form_input($data);
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<input type="submit" value="Submit">';
echo form_close(); 
?>

</body>
</html>
