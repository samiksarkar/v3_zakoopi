<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * UserCheckins Controller
 *
 * @property \App\Model\Table\UserCheckinsTable $UserCheckins
 */
class UserCheckinsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Stores']
        ];
        $this->set('userCheckins', $this->paginate($this->UserCheckins));
        $this->set('_serialize', ['userCheckins']);
    }

    /**
     * View method
     *
     * @param string|null $id User Checkin id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userCheckin = $this->UserCheckins->get($id, [
            'contain' => ['Users', 'Stores']
        ]);
        $this->set('userCheckin', $userCheckin);
        $this->set('_serialize', ['userCheckin']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userCheckin = $this->UserCheckins->newEntity();
        if ($this->request->is('post')) {
            $userCheckin = $this->UserCheckins->patchEntity($userCheckin, $this->request->data);
            if ($this->UserCheckins->save($userCheckin)) {
                $this->Flash->success('The user checkin has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user checkin could not be saved. Please, try again.');
            }
        }
        $users = $this->UserCheckins->Users->find('list', ['limit' => 200]);
        $stores = $this->UserCheckins->Stores->find('list', ['limit' => 200]);
        $this->set(compact('userCheckin', 'users', 'stores'));
        $this->set('_serialize', ['userCheckin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Checkin id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userCheckin = $this->UserCheckins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userCheckin = $this->UserCheckins->patchEntity($userCheckin, $this->request->data);
            if ($this->UserCheckins->save($userCheckin)) {
                $this->Flash->success('The user checkin has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user checkin could not be saved. Please, try again.');
            }
        }
        $users = $this->UserCheckins->Users->find('list', ['limit' => 200]);
        $stores = $this->UserCheckins->Stores->find('list', ['limit' => 200]);
        $this->set(compact('userCheckin', 'users', 'stores'));
        $this->set('_serialize', ['userCheckin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Checkin id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userCheckin = $this->UserCheckins->get($id);
        if ($this->UserCheckins->delete($userCheckin)) {
            $this->Flash->success('The user checkin has been deleted.');
        } else {
            $this->Flash->error('The user checkin could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
