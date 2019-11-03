<?php 
echo form_open_multipart('cms/file_upload'); ?>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"> </div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

  <div class="container-fluid">
    <h1 class="mt-4">Add Your Product</h1>
    <form>
  <fieldset>
  
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" name='title' placeholder="title">
    </div>

    <div class="form-group">
      <label for="exampleInputFile">Image input</label>
      <input type="file" class="form-control-file" name="file_name" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>
   
    <div class="form-group">
      <label for="exampleTextarea">Add a Post</label>
      <textarea class="form-control" name='body' rows="4"></textarea>
    </div>
   

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

<?php echo form_close();?>
</body>

</html>