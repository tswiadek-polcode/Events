<?php

class UsersController extends AppController {

    var $name = 'Users';
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Auth', 'Session');

    function beforeFilter() {
        $this->Auth->fields = array(
            'username' => 'username',
            'password' => 'password'
        );

        $this->Auth->allow('register');
    }

    function index() {
        
    }

    function login() {
           //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => '../events'));     
        }
         
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('firstname') .' '. $this->Auth->user('lastname')));
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        } 
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
         
    function register() {
        if (!empty($this->data)) {
           
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->Session->setFlash("Account created!");
                $this->redirect('/events');
            }else $this->Session->setFlash("Something went wrong, try again : ( . . .");
        }
    }

}
?>