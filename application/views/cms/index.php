

<h2> Welcome here </h2>
 
<?php foreach($file_upload as $file) : ?>
<h2> <?php echo $file['title']; ?></h2>
<h4 class="post-date"> Posted on: <?php echo $file['created_at']; ?></h4><br/>
<h3><?php echo $file['body']; ?></h3><br/> <br/>
<h3><?php echo $file['file_name']; ?></h3><br/> <br/>
<?php endforeach; ?> 
