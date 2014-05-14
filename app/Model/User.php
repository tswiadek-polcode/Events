<?php

class User extends AppModel {

    var $name = 'User';
    var $useTable = 'users';
    var $validate = array(
        'username' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your username.'
        ),
        'email' => array(
            'kosher' => array(
                'rule' => 'email',
                'rule' => 'notEmpty',
                'message' => 'Please make sure your email is entered correctly.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'An account with that email already exists.'
            ),
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please Enter your email.'
            )
        ),
        'passwd' => array(
            'min' => array(
                'rule' => array('minLength', 6),
                'message' => 'Usernames must be at least 6 characters.'
            ),
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a password.'
            ),
        ),
        'passwd_confirm' => array(
            'required' => 'notEmpty',
            'match' => array(
                'rule' => 'validatePasswdConfirm',
                'message' => 'Passwords do not match'
            )
        ),
        'firstname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your first name.'
            ),
            'max' => array(
                'rule' => array('maxLength', 30),
                'message' => 'First name must be fewer than 30 characters'
            )
        ),
        'lastname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your last name.'
            ),
            'max' => array(
                'rule' => array('maxLength', 30),
                'message' => 'Last name must be fewer than 30 characters'
            )
        )
    );

    function validatePasswdConfirm($data) {
        if ($this->data['User']['passwd'] !== $data['passwd_confirm']) {
            return false;
        }
        return true;
    }

    function beforeSave( $options = array()) {
        if (isset($this->data['User']['passwd'])) {
            $this->data['User']['password'] = Security::hash($this->data['User']['passwd'], null, true);
            unset($this->data['User']['passwd']);
        }

        if (isset($this->data['User']['passwd_confirm'])) {
            unset($this->data['User']['passwd_confirm']);
        }

        return true;
    }

}

?>