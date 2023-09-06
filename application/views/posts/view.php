<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?><br></small>
<img class="post-thumb-home" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-primary float-left mr-2" href="<?php echo base_url();?>
posts/edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
 </form>