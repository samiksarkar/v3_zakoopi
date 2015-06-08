<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * TeamUsers Controller
 *
 * @property \App\Model\Table\TeamUsersTable $TeamUsers
 */
class TeamUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Teams']
        ];
        $this->set('teamUsers', $this->paginate($this->TeamUsers));
        $this->set('_serialize', ['teamUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Team User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamUser = $this->TeamUsers->get($id, [
            'contain' => ['Users', 'Teams']
        ]);
        $this->set('teamUser', $teamUser);
        $this->set('_serialize', ['teamUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamUser = $this->TeamUsers->newEntity();
        if ($this->request->is('post')) {
            $teamUser = $this->TeamUsers->patchEntity($teamUser, $this->request->data);
            if ($this->TeamUsers->save($teamUser)) {
                $this->Flash->success(__('The team user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team user could not be saved. Please, try again.'));
            }
        }
        $users = $this->TeamUsers->Users->find('list', ['limit' => 200]);
        $teams = $this->TeamUsers->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamUser', 'users', 'teams'));
        $this->set('_serialize', ['teamUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamUser = $this->TeamUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamUser = $this->TeamUsers->patchEntity($teamUser, $this->request->data);
            if ($this->TeamUsers->save($teamUser)) {
                $this->Flash->success(__('The team user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team user could not be saved. Please, try again.'));
            }
        }
        $users = $this->TeamUsers->Users->find('list', ['limit' => 200]);
        $teams = $this->TeamUsers->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamUser', 'users', 'teams'));
        $this->set('_serialize', ['teamUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamUser = $this->TeamUsers->get($id);
        if ($this->TeamUsers->delete($teamUser)) {
            $this->Flash->success(__('The team user has been deleted.'));
        } else {
            $this->Flash->error(__('The team user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
