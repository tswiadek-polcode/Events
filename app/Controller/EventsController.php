<?php

class EventsController extends AppController{
    public $helpers = array('Html', 'Form');
    public function index(){
        $this->set('events', $this->Event->find('all', array(
            'order' => 'RAND()',
            'limit' => 4
        )));
    }
     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid event'));
        }

        $event = $this->Event->findById($id);
        if (!$event) {
            throw new NotFoundException(__('Invalid event'));
        }
        $this->set('event', $event);
    }
    
    function addEvent(){
         if (!empty($this->data)) {
           
            $this->Event->create();
            if ($this->Event->save($this->data)) {
                $this->Session->setFlash("Event Created!");
                $this->redirect('/events/index');
            }else $this->Session->setFlash("Something went wrong, try again : ( . . .");
        }
    }

}

