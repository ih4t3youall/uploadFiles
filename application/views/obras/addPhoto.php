<html>
<head>
<title>Add Photo</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>



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
echo form_hidden('id_obra',$id_obra);
?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
<form action="<?php echo base_url();?>/index.php/main/">
    <input type="submit" value="Finalizar Carga" />
</form>

</body>
</html>


