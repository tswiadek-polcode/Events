<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AppController extends Controller{
 
    public $components = array(
        'Session',
        
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'events'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'events')
        )
    );

    public function beforeFilter() {
       
        $this->Auth->allow('index','display', 'view');
    }
    
}