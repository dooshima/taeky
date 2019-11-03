<?php foreach($posts as $post) : ?>
<h2> <?php echo $post['title']; ?></h2>
<small class="post-date"> Posted on: <?php echo $post['created_at']; ?></small><br/>
<?php echo $post['body']; ?><br/> <br/>
<!-- <img alt="tae" height="220px" src="<?php echo site_url('assets/image/');?>belt.jpg"/> -->
<p> <a  class="btn btn-secondary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More </a> </p>
<?php endforeach; ?>
