<?php
namespace App\Controller;

use App\Controller\AppController;



/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * beforeFilter method
     *
     * @define 
    */
    public function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['profile','google_login']);
    }
    
    public function login(){
        $this->layout = 'login';
        if($this->request->is(array('post'))){
            $user = $this->Auth->identify();
            if($user && $user['roles'] == 'ADMIN'){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error(
                    __('Username or password is incorrect'),
                    'default',
                    [],
                    'auth'
                );
            }
        }
    }
    
    /**
     * Logout user
     * @return string
     */
    
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['ArticleHits', 'Lookbookcomments', 'Lookbooklikes', 'Lookbooks', 'ReportErrors', 'StoreRatings', 'StoreReviews', 'UserCheckins', 'UserFavourites']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('The user has been deleted.');
        } else {
            $this->Flash->error('The user could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
      /**
     * User Profile 
     *
     * @param string|null $slug User name slug.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function profile($slug = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
//        $user = $this->Users->get($id);
//        if ($this->Users->delete($user)) {
//            $this->Flash->success('The user has been deleted.');
//        } else {
//            $this->Flash->error('The user could not be deleted. Please, try again.');
//        }
//        return $this->redirect(['action' => 'index']);
    }
    
    
    /**
     * User Social login from Google
     *
     * @param string|null $slug User name slug.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
        public function google_login(){        
            $this->layout = 'ajax';
            $users = \Cake\ORM\TableRegistry::get('Users');
            $user_new = $this->Users->newEntity();
            if($this->request->is(array('post'))){
               $d = $this->request->data;
            
                $user_new = $this->Users->patchEntity($user_new, $d);
              
                $user_exists = $users->find()->where(['uid' => $d['uid']])->toArray();
                
                if (!empty($user_exists)) {  
                    $user = $this->Auth->identify();
                    return $this->redirect($this->Auth->redirectUrl());
                 
                } else {  
                    $this->Users->save($user_new);
                    return $this->redirect($this->Auth->redirectUrl());
                }
            
            }else{
                return $this->redirect(['controller'=>'pages','action'=>'home']);
               
            }
        }
    
    
    
}
