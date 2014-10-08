<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Event extends AppModel{
   /* var $creatorInfo = array( 'User' => array(
        'foreignKey'=> 'ID'
    ) ); */
    
   public $belongsTo = array ( 'User' => array (
        'foreignKey'=>'creator_id'
    )) ;
}