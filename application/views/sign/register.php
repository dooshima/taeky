<?php if($this->session->flashdata('registered')) : ?>
 <p class="alert alert-dismissible alert-success">
 You have registered before</p>
<?php endif;?>

<h2>Register Form </h2>

<?php if($this->session->flashdata('registered')) : ?>
 <p class="alert alert-dismissible alert-success">
You alredy register please login?</p>
<?php endif;?><?php echo form_open('user/register');?>

<div class="form-group">
  <?php echo form_label('FirstName: ');?>
  <?php   
  $data = array('name' => 'first_name',
               'placeholder' => 'Enter FirstName',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('first_name')

   ); ?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
  <?php echo form_label('LastName: ');?>
  <?php 
  $data = array('name' => 'last_name',
               'placeholder' => 'Enter LastName',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('last_name')

   ); ?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
  <?php echo form_label('UserName: ');?>
  <?php 
  $data = array('name' => 'username',
               'placeholder' => 'Enter UserName',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('username')

   ); ?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
  <?php echo form_label('Email: ');?>
  <?php 
  $data = array('name' => 'email',
               'placeholder' => 'Enter Email',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('email')

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
<?php echo form_label('Confirm Password: ');?>
  <?php 
  $data = array('name' =>'password2',
               'placeholder' => 'Enter Password',
               'class' => "form-text text-muted form-control",
               'value'  => set_value('password2 ')
   ); ?>
   <?php echo form_password($data);?>

</div>

<div class="form-group">
  <?php 
  $data = array('name' => 'submit',
                'class' =>'btn btn-primary',
                'type' => "submit",
                'style' => 'width :10%','color: white',
                'value'  => set_value('Register')
   ); ?>
   <?php echo form_submit($data);?>
</div>
<?php echo form_close(); ?> 