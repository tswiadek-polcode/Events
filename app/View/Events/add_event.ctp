<html>
    <head>
      
    </head>
    <body>
        
    <?php    
        echo '<a href="http://localhost/events/events">BEK PLIS!</a>';
        echo $this->form->create('Event', array('action' => 'addEvent'));
        echo $this->form->input('name');
        echo $this->form->input('description');
        echo $this->form->input('date_from');
        echo $this->form->input('date_to');
        echo $this->form->intut('creator_id', array('value'=>''.$this->Session->read('Auth.User.ID').'', 'type'=>'hidden'));
        echo $this->form->input('eventType', array('private'=>'Private', 'public'=>'Public'));
        echo $this->form->submit();
        echo $this->form->end(); 
    ?>

    </body>
</html>