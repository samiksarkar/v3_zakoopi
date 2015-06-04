<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Crop Controller
 *
 * @property \App\Model\Table\MarketsTable $Markets
 */
class CropController extends AppController{
    
    public function index(){
        if($this->request->is(['post'])){
            $d = $this->request->data;
            print_r($d);
            exit;
        }
    }
    
}
