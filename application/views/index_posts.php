<?php if($this->session->userdata('userID')) {?>
<p>You are logged in!</p>
<p><a href="<?=base_url()?>users/logout">Logout</a></p>
<p>User type: <?=$this->session->userdata('user_type'); ?></p>
<?php } else { ?>
<p><a href="<?=base_url()?>users/login">Login</a></p>
<?php } ?>
<h1>Blog posts</h1>
<?php
if(!isset($posts)) {
?>
<p>There are currently no posts.</p>
<?php
}else{
foreach($posts as $row){
	?>
	<h2>
		<a href="<?=base_url()?>posts/post/<?=$row['postID']?>"><?=$row['title']?></a> - 
		<a href="<?=base_url()?>posts/editpost/<?=$row['postID']?>">Edit</a> / 
		<a href="<?=base_url()?>posts/deletepost/<?=$row['postID']?>">Delete</a>
	</h2>

	<p><a href='<?=base_url()?>posts/post/<?=$row['postID']?>'>Read more</a></p>
	<hr/>
	
<?php
	}
}
?>
<?=$pages?>
<p style='text-align:center;'><a href='<?=base_url()?>posts/new_post/'><button>New post</button></a></p>
