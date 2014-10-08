<div style="width:100%; height:100%;">
   <?php $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)]; ?>

    <div style="width:80%; height:auto; padding-bottom: 10px; padding-top: 10px; background-color:<?php //echo $color; ?>; margin-left:auto; margin-right:auto;">
        <a href="../../" > <h1 style="background-color:<?php //echo  "#987123"?>;">Back to the home page</h1> </a>
        <h1 style="font-size:28px; text-align: center; background-color:<?php //echo "#fff221" ?>;"><?php echo h($event['Event']['name']); ?></h1>

        <p style="font-size:18px; text-align: center; background-color:<?php //echo "#ff2599" ?>;"><?php echo h($event['Event']['description']); ?></p>

    </div>
</div>