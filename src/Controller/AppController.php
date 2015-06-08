<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Crud\Controller\ControllerTrait;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    // use \Crud\Controller\ControllerTrait;
    
    //Abhi Started working

    public $components = [
//        'Auth',
        'RequestHandler',
        // 'Crud.Crud' => [
            // 'actions' => [
                // 'Crud.Index',
                // 'Crud.View',
                // 'Crud.Add',
                // 'Crud.Edit',
                // 'Crud.Delete'
            // ],
            // 'listeners' => [
                // 'Crud.Api',
                // 'Crud.ApiPagination',
                // 'Crud.ApiQueryLog'
            // ]
        // ]
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        if($this->request->param('prefix') == null && in_array($this->request->param('_ext'), ['json','xml'])){
            throw new \Cake\Network\Exception\NotFoundException('Page Not Found');
        }
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'authError' => 'Did you really think you are allowed to see that?',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ]
        ]);
//        debug($this->request);
//        exit;
    }
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        
        $this->Auth->allow(array('display'));
        
        /* Layout Setup for TurboLinks */
        if($this->request->header('X-PJAX')){
            $this->layout = 'pjax_default';
        }
        
        
        
    }
}
