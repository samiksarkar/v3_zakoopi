<?php
class OpauthController extends OpauthAppController {

    public $components = array('Auth', 'Session');
    public function beforeFilter() {
       
        // Allow access to Opauth methods for users of AuthComponent
        if (!$this->Session->read("Auth.User")) {
            if (is_object($this->Auth) && method_exists($this->Auth, 'allow')) {
                $this->Auth->allow();
            }
        }
        else {
            //$this->redirect($this->Session->read('last_link'));
            $this->redirect('/');
        }
    }
}