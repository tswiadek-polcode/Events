<?php

class User extends AppModel {
     /*    public $hasOne = array(
            'User' => array(
                'className'=>'User',
                'foreignKey'=>'ID'
            )
        ); */
    
    var $hasMany =  'Event';
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
        'password' => array(
            'min' => array(
                'rule' => array('minLength', 6),
                'message' => 'Usernames must be at least 6 characters.'
            ),
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a password.'
            ),
        ),
        'password_confirm' => array(
            'required' => 'notEmpty',
            'match' => array(
                'rule' => 'validatePasswordConfirm',
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
          'birthday' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your birthdate.'
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
        ),
        'nb_confirm' => array(
          'rule' => 'validateNbConfirm',
            'message' => 'Please solve the equation.'
          
        ),
        
        'firstNb' => array(
         'rule' => 'notEmpty'
        ),
        'secondNb' => array(
          'rule' => 'notEmpty'
        ),
        'operandD' => array(
          'rule' => 'notEmpty'
      
        )
    );
    
         


    function validatePasswordConfirm($data) {
        if ($this->data['User']['password'] !== $data['password_confirm']) {
            return false;
        }else return true;
    }

    
    function validateNbConfirm($data){
        if (!empty($this->data['User']['nb_confirm']) ){
            echo 'Its not empty so its good';
              if($this->data['User']['operandD'] == '+'){
                   echo 'got +';
               if($this->data['User']['nb_confirm'] != $this->data['User']['firstNb']+$this->data['User']['secondNb']){
                   return false;
               }else return true;
           }
            if($this->data['User']['operandD'] == '-'){
                 echo 'got -';
               if($this->data['User']['nb_confirm'] != $this->data['User']['firstNb']-$this->data['User']['secondNb']){
                   return false;
               }else return true;
           }
            if($this->data['User']['operandD'] == '*'){
                 echo 'got *';
               if($this->data['User']['nb_confirm'] != $this->data['User']['firstNb']*$this->data['User']['secondNb']){
                   return false;
               }else return true;
           }
        
        }else return false;
    }
    function beforeSave( $options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = Security::hash($this->data['User']['password'], null, true);
            unset($this->data['User']['password']);
        }

        if (isset($this->data['User']['password_confirm'])) {
            unset($this->data['User']['password_confirm']);
        }

        return true;
    }

}

?>