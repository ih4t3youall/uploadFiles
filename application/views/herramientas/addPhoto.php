<html>
<head>
<title>Add Photo</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('herramientas/do_upload');?>



<?php
echo '<p>Texto Imagen (opcional)</p>';
$data = array(
        'name'          => 'textoimagen',
        'id'            => 'textoimagen',
        'value'         => '',
        'style'         => 'width:50%'
);
echo form_input($data);
echo '<br/>';
echo form_hidden('id_herramienta',$inserted_id);
?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>


