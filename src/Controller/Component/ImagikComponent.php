<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class ImagikComponent extends Component
{
    /**
     * 
     * @param String $source Path of input file
     * @param String $target Path with name of Target File
     * @param type $width Width of image which it would be scaled
     * @param type $height Height of image which it would be scaled (Default Auto)
     * @return boolean
     */
    public function scaleImageAndSaveTo($source = null,$target,$width,$height=0)
    {
        if(!is_file($source)){
            return false;
        }
        return true;
    }
}