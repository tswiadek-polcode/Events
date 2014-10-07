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
/* Nowy login... troche potestowac trzeba..
 * public function login() {
if($this->request->is('post')) {
App::Import('Utility', 'Validation');
if( isset($this->data['User']['username']) &&
Validation::email($this->data['User']['username'])) {
$this->request->data['User']['email'] = $this->data['User']['username'];
$this->Auth->authenticate['Form'] = array('fields' =>
array('username' => 'email'));
}
if(!$this->Auth->login()) {
$this->Session->setFlash(__('Invalid username or password, try again'));
} else {
$this->redirect($this->Auth->redirect());
}
}
}
 */
    function login() {
           //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => './events'));     // cofamy na strone glowna
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
                $this->redirect('/events/index');
            }else $this->Session->setFlash("Something went wrong, try again : ( . . .");
        }
    }

}
?>