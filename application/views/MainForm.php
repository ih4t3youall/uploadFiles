<html>
<head>
</head>
<body>

<?php

$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('email/send', $attributes);




$data = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => 'johndoe',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
);

echo form_input($data);



echo form_close(); 
?>

</body>
</html>
