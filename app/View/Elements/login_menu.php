<?php 
if(!$session->check('Auth.User')){
echo $html->link('Login','/login');
} else {
$username = $session->read('Auth.User.username');
echo " Hello ". $username ."&nbsp;";
echo $html->link("(logout)", "/logout", array(), null, false);
}
?>