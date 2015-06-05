<?php
namespace App\Controller;

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
        $img = new \Imagick();
        debug($img);
        exit;
    }
    public function slug(){
        $txt = "Top 5 markets & stores for shopinng in summer";
        $slug = \Cake\Utility\Inflector::slug($txt);
        debug($slug);
        exit;
                
    }

}
