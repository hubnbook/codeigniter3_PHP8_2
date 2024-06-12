
<?php //echo form_open_multipart("/"  . 'Main/do_upload');?>

<?php echo (isset($error))? $error:""; ?>

<form action="/codeigniter3/index.php/Main/do_upload" enctype="multipart/form-data" method="post">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
