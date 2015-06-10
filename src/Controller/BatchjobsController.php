<?php
namespace App\Controller;
/**
 * @property Imagik $Imagik ImagikComponent
 */

class BatchjobsController extends AppController{
    
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Imagik');
    }

    public function imTrends(){
        $trends = \Cake\ORM\TableRegistry::get('trends');
        $trend = $trends->find()->toArray();
        $x = $this->Imagik->scaleImageAndSaveTo();
        debug($trend);
        exit;
    }
    
    
}