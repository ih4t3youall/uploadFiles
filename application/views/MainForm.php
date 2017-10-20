<html>
<head>
</head>
<body>

<?php

$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('email/send', $attributes);
echo '<p>Antecedentes</p>';
$data = array(
        'name'          => 'Antecedentes',
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
        'name'          => 'Texto',
        'id'            => 'Texto',
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
        'name'          => 'Obras',
        'id'            => 'Obras',
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
        'name'          => 'Lugar',
        'id'            => 'Lugar',
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
        'name'          => 'Planta',
        'id'            => 'Planta',
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
        'name'          => 'Cliente',
        'id'            => 'Cliente',
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
        'name'          => 'Desc_tar_realiz',
        'id'            => 'Desc_tar_realiz',
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
