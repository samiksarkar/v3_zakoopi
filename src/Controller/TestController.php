<?php
use App\Controller;

use App\Controller\AppController;

/**
 * CakePHP TestController
 * @author Zakoopi
 */
class TestController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

        public function index($id) {
        debug($this->Auth->user());
        exit;
    }
    public function img(){
        Cake\Core\Configure::write('debug', true);
        $img = new Imagick();
        debug($img);
        exit;
    }

}
