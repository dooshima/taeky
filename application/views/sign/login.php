
<?php if($this->session->flashdata('login_failed')) : ?>
 <p class="alert alert-dismissible alert-success">
 <?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif;?>
<h2>Login Form </h2>

<?php $attributes = array('id' => 'login_form', 'class' =>'form-horizontal'); ?>
<?php echo form_open('user/login', $attributes);?>


<div class="form-group">
  <?php echo form_label('Username: ');?>
  <?php 
  $data = array('name' => 'username',
               'placeholder' => 'Enter Username',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('username')
   ); ?>
   
<?php echo form_input($data);?>
</div>

<div class="form-group">
<?php echo form_label('Password: ');?>
  <?php 
  $data = array('name' => 'password',
               'placeholder' => 'Enter Password',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('password')
   ); ?>
   <?php echo form_password($data);?>

</div>

<div class="form-group">
  <?php 
  $data = array('name' => 'submit',
                'class' =>'btn btn-primary',
                'type' => "submit",
                'style' => 'width :10%','color: white',
                'value'  => set_value('Login')
   ); ?>
   <?php echo form_submit($data);?>
</div>

<p>Don't have an account? Click to <a href="<?php echo site_url();?>user/index">Register</a></p>
<p>Click <a href="<?php echo site_url();?>reset">here</a> if you forgot your password.</p>


<?php echo form_close(); ?> 