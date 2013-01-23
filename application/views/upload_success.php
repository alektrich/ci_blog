<h3>File je uspesno uploadovan!</h3>
<ul>
	<?php foreach ($upload_data as $key => $value) { ?>
	<li><?php echo $key; ?>:<?php echo $value; ?></li>
	<?php } ?>
</ul>

<p><a href='<?php echo base_url()."upload"; ?>'>Upload another file</a></p>
