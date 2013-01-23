
<!-- Ovo je loša praksa - da koristiš vitičaste zagrade u view-u 
	Imaš drugačiju sintaksu koja ti zamenjuje vitičaste (ispravio sam):
-->
<?php if($success): ?>
<div style="color:white; background: green;">This post has been updated!</div>
<?php endif; ?>

<!-- Takođe, napisao si bio if ($success == 1), što je nepotrebno, 
	jer ti if ($success) radi istu stvar. I to sam ispravio.
-->

<form action='<?=base_url()?>posts/editpost/<?=$post["postID"]?>' method='post'>
	<p>Title: <input name='title' type='text' value='<?=$post['title']?>'/></p>
	<p>Post body:<br /><textarea name='post'><?=$post['post']?></textarea></p>
	<p><input type='submit' value='Edit post'/></p>
</form>	
<a href='<?=base_url()?>'><button>Home page</button></a>

