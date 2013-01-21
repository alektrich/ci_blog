
<?php if(!isset($post)) { ?>
	 <p>This page was accessed incorectly.</p>
<?php } else { ?>
<h2><?=$post['title']?></h2>
<p><?=$post['post']?></p>
<?php } ?>

