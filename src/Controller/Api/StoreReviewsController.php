<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * StoreReviews Controller
 *
 * @property \App\Model\Table\StoreReviewsTable $StoreReviews
 */
class StoreReviewsController extends AppController
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
        $this->set('storeReviews', $this->paginate($this->StoreReviews));
        $this->set('_serialize', ['storeReviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Review id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeReview = $this->StoreReviews->get($id, [
            'contain' => ['Users', 'Stores']
        ]);
        $this->set('storeReview', $storeReview);
        $this->set('_serialize', ['storeReview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeReview = $this->StoreReviews->newEntity();
        if ($this->request->is('post')) {
            $storeReview = $this->StoreReviews->patchEntity($storeReview, $this->request->data);
            if ($this->StoreReviews->save($storeReview)) {
                $this->Flash->success('The store review has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store review could not be saved. Please, try again.');
            }
        }
        $users = $this->StoreReviews->Users->find('list', ['limit' => 200]);
        $stores = $this->StoreReviews->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeReview', 'users', 'stores'));
        $this->set('_serialize', ['storeReview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Review id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeReview = $this->StoreReviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeReview = $this->StoreReviews->patchEntity($storeReview, $this->request->data);
            if ($this->StoreReviews->save($storeReview)) {
                $this->Flash->success('The store review has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store review could not be saved. Please, try again.');
            }
        }
        $users = $this->StoreReviews->Users->find('list', ['limit' => 200]);
        $stores = $this->StoreReviews->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeReview', 'users', 'stores'));
        $this->set('_serialize', ['storeReview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Review id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeReview = $this->StoreReviews->get($id);
        if ($this->StoreReviews->delete($storeReview)) {
            $this->Flash->success('The store review has been deleted.');
        } else {
            $this->Flash->error('The store review could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
