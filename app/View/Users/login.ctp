
<?php
 echo '<a href="http://localhost/events/">BEK PLIS!</a>';
$this->session->flash('auth');
echo $this->form->create('User', array('action' => 'login'));
echo $this->form->input('username');
echo $this->form->input('password', array('required'=>'required', 'type'=>'password'));
echo $this->form->end('Login');
echo $this->html->link('Sign up', array('controller'=>'users', 'action'=>'register')); 
?>