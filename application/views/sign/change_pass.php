
<?php 
echo validation_errors();
$reset_key = $this->uri->segment(3); 
//print_r($reset_key);exit;
echo form_open('reset_password/reset_password_validation');
echo form_hidden('reset_key', set_value('reset_key', $reset_key));
echo form_password('password', $this->input->post('password'));
echo form_password('confirm_password', $this->input->post('password'));
echo form_submit('submit', 'Reset password');
echo form_close();


?>


