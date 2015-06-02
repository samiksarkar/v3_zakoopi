<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * StoreRatings Controller
 *
 * @property \App\Model\Table\StoreRatingsTable $StoreRatings
 */
class StoreRatingsController extends AppController
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
        $this->set('storeRatings', $this->paginate($this->StoreRatings));
        $this->set('_serialize', ['storeRatings']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Rating id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeRating = $this->StoreRatings->get($id, [
            'contain' => ['Users', 'Stores']
        ]);
        $this->set('storeRating', $storeRating);
        $this->set('_serialize', ['storeRating']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeRating = $this->StoreRatings->newEntity();
        if ($this->request->is('post')) {
            $storeRating = $this->StoreRatings->patchEntity($storeRating, $this->request->data);
            if ($this->StoreRatings->save($storeRating)) {
                $this->Flash->success('The store rating has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store rating could not be saved. Please, try again.');
            }
        }
        $users = $this->StoreRatings->Users->find('list', ['limit' => 200]);
        $stores = $this->StoreRatings->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeRating', 'users', 'stores'));
        $this->set('_serialize', ['storeRating']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Rating id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeRating = $this->StoreRatings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeRating = $this->StoreRatings->patchEntity($storeRating, $this->request->data);
            if ($this->StoreRatings->save($storeRating)) {
                $this->Flash->success('The store rating has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store rating could not be saved. Please, try again.');
            }
        }
        $users = $this->StoreRatings->Users->find('list', ['limit' => 200]);
        $stores = $this->StoreRatings->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeRating', 'users', 'stores'));
        $this->set('_serialize', ['storeRating']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Rating id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeRating = $this->StoreRatings->get($id);
        if ($this->StoreRatings->delete($storeRating)) {
            $this->Flash->success('The store rating has been deleted.');
        } else {
            $this->Flash->error('The store rating could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
