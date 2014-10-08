<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<?php echo $this->Html->charset(); ?>
        <title>
<?php echo __('Title') ?>
        </title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->css('bootstrap');
echo $this->Html->script('http://code.jquery.com/jquery-1.7.2.min.js');
echo $this->Html->script('bootstrap');
echo $this->Html->css('custom');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

?>
    </head>
    <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/events"><?php echo $this->Html->image("casper.png", array('style'=>'width:30px; height:30px;'));?>  Your best event site</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
           <?php if($this->Session->check('Auth.User')){
                        echo "<li><a href='linkToProfilePage' class='navbar-link'>Profile: ".$this->Session->read('Auth.User.firstname')." ".$this->Session->read('Auth.User.lastname')."</a></li>";    
                        echo "<li>".$this->Html->link( "Add your NEW EVENT!",   array('controller' => 'events', 'action'=>'addEvent') )."</li>";
                        
                        echo " ";
                        echo "<li>".$this->Html->link( "Logout",   array('controller' => 'users', 'action'=>'logout') )."</li>";
                        echo "<br>";
    }else{
        echo '<a href="http://localhost/events/users/register"> Register </a>
        <a href="http://localhost/events/users/login"> Login </a> ';
    } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <body>
        <div id="container" class="container">
            <div id="content" class="row">
<?php echo $this->Session->flash('flash', array('element' => 'flash')); ?>
<?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer" class="row">
<?php
echo $this->Html->link(
$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
);
?>
            </div>
        </div>
        <div class="container">
<?php echo $this->element('sql_dump'); ?>
        </div>
    </body>
</html>


                   
   