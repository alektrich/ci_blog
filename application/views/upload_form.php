<?php echo $error; ?>

<?php echo form_open_multipart('upload/do_upload'); ?>
<?php echo form_upload(array('name' => 'userfile')); //metuo sam ti ovo u jedan red ?><br />
<?php echo form_submit('', 'Upload'); ?>
<?php echo form_close(); ?>