<?php

$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)]; ?>
<div id="navbar" style="width:100%; text-align:right;">

</div>

<h1 style="text-align:center; margin-left:auto; margin-right:auto; font-size:32px; font-family: Impact, Charcoal, sans-serif; font-style:italic; color:<?php echo $color; ?>;;">SOME RANDOM EVENTS YOU MUST SEE!</h1>

<!-- Here is where we loop through our $posts array, printing out post info -->
<div style="margin-left:20px;margin-right:20px;">
    <?php foreach ($events as $event): ?>
    <div style="float:left;margin-left:25px;">
        <div style="float:left;"><?php echo $this->Html->link($event['Event']['name'],
array('controller' => 'events', 'action' => 'view', $event['Event']['id'])); ?></div>
        <br />
        <div><strong>From:</strong> <?php echo $event['Event']['date_from']; ?> <strong>To:</strong> <?php echo $event['Event']['date_to']; ?></div>
        <br />
    </div>
    <?php endforeach; ?>
</div>
<div style="width:100%; min-height:200px; float:left; margin-left:0; background-color:#F8F8F8  ; color:black; text-align:center;"> test </div>
    <?php unset($event); ?>
