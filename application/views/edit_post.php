

<?php if($success == 1) { ?>
<div style="color:white; background: green;">This post has been updated!</div>

<?php } ?>

<form action='<?=base_url()?>posts/editpost/<?=$post["postID"]?>' method='post'>
	<p>Title: <input name='title' type='text' value='<?=$post['title']?>'/></p>
	<p>Post body:<br /><textarea name='post'><?=$post['post']?></textarea></p>
	<p><input type='submit' value='Edit post'/></p>
</form>	
<a href='<?=base_url()?>'><button>Home page</button></a>

