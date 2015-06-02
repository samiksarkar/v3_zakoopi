<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * UserFavourites Controller
 *
 * @property \App\Model\Table\UserFavouritesTable $UserFavourites
 */
class UserFavouritesController extends AppController
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
        $this->set('userFavourites', $this->paginate($this->UserFavourites));
        $this->set('_serialize', ['userFavourites']);
    }

    /**
     * View method
     *
     * @param string|null $id User Favourite id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userFavourite = $this->UserFavourites->get($id, [
            'contain' => ['Users', 'Stores']
        ]);
        $this->set('userFavourite', $userFavourite);
        $this->set('_serialize', ['userFavourite']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userFavourite = $this->UserFavourites->newEntity();
        if ($this->request->is('post')) {
            $userFavourite = $this->UserFavourites->patchEntity($userFavourite, $this->request->data);
            if ($this->UserFavourites->save($userFavourite)) {
                $this->Flash->success('The user favourite has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user favourite could not be saved. Please, try again.');
            }
        }
        $users = $this->UserFavourites->Users->find('list', ['limit' => 200]);
        $stores = $this->UserFavourites->Stores->find('list', ['limit' => 200]);
        $this->set(compact('userFavourite', 'users', 'stores'));
        $this->set('_serialize', ['userFavourite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Favourite id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userFavourite = $this->UserFavourites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userFavourite = $this->UserFavourites->patchEntity($userFavourite, $this->request->data);
            if ($this->UserFavourites->save($userFavourite)) {
                $this->Flash->success('The user favourite has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user favourite could not be saved. Please, try again.');
            }
        }
        $users = $this->UserFavourites->Users->find('list', ['limit' => 200]);
        $stores = $this->UserFavourites->Stores->find('list', ['limit' => 200]);
        $this->set(compact('userFavourite', 'users', 'stores'));
        $this->set('_serialize', ['userFavourite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Favourite id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userFavourite = $this->UserFavourites->get($id);
        if ($this->UserFavourites->delete($userFavourite)) {
            $this->Flash->success('The user favourite has been deleted.');
        } else {
            $this->Flash->error('The user favourite could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
