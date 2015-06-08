<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * TeamLikes Controller
 *
 * @property \App\Model\Table\TeamLikesTable $TeamLikes
 */
class TeamLikesController extends AppController
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
        $this->set('teamLikes', $this->paginate($this->TeamLikes));
        $this->set('_serialize', ['teamLikes']);
    }

    /**
     * View method
     *
     * @param string|null $id Team Like id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamLike = $this->TeamLikes->get($id, [
            'contain' => ['Users', 'Teams']
        ]);
        $this->set('teamLike', $teamLike);
        $this->set('_serialize', ['teamLike']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamLike = $this->TeamLikes->newEntity();
        if ($this->request->is('post')) {
            $teamLike = $this->TeamLikes->patchEntity($teamLike, $this->request->data);
            if ($this->TeamLikes->save($teamLike)) {
                $this->Flash->success(__('The team like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team like could not be saved. Please, try again.'));
            }
        }
        $users = $this->TeamLikes->Users->find('list', ['limit' => 200]);
        $teams = $this->TeamLikes->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamLike', 'users', 'teams'));
        $this->set('_serialize', ['teamLike']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Like id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamLike = $this->TeamLikes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamLike = $this->TeamLikes->patchEntity($teamLike, $this->request->data);
            if ($this->TeamLikes->save($teamLike)) {
                $this->Flash->success(__('The team like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team like could not be saved. Please, try again.'));
            }
        }
        $users = $this->TeamLikes->Users->find('list', ['limit' => 200]);
        $teams = $this->TeamLikes->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamLike', 'users', 'teams'));
        $this->set('_serialize', ['teamLike']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Like id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamLike = $this->TeamLikes->get($id);
        if ($this->TeamLikes->delete($teamLike)) {
            $this->Flash->success(__('The team like has been deleted.'));
        } else {
            $this->Flash->error(__('The team like could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
