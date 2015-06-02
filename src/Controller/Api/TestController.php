<?php
use App\Controller;

use App\Controller\Api\AppController;

/**
 * CakePHP TestController
 * @author Zakoopi
 */
class TestController extends AppController {

    public function index($id) {
        debug($this->Auth->user());
        exit;
    }

}
