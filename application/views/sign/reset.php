
 <?php           
echo form_open('reset_password/email_reset_password_validation');
  ?>

<div class="col-lg-4 col-lg-offset-4">
    <h2>Forgot Password</h2>
    <p>Please enter your email address and we'll send you instructions on how to automatic generate your password</p>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>

