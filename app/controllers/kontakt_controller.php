<?php
class KontaktController extends AppController
{
    var $uses = array();
    var $helpers = array('Html', 'Javascript');
    var $components = array('Email');

    public function view()
    {
    }

    public function send()
    {
        if (!count($_POST)) {
            $this->redirect(array('action' => 'view'));
        }
        
        $email = $_POST;
        $this->Email->to = 'violamd@interia.pl';
        $this->Email->cc ='damiangoc@o2.pl';
        $this->Email->subject = $email['subject'];
        $this->Email->from = $email['userEmail'];
        $this->set('tresc', $email['content']);
        $this->Email->template = 'message_from_contact'; // note no '.ctp'
        //Send as 'html', 'text' or 'both' (default is 'text')
        $this->Email->sendAs = 'both'; // because we like to send pretty mail
        //Do not pass any args to send()
        $this->Email->send();
    }
}
