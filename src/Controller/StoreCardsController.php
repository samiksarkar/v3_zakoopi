<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoreCards Controller
 *
 * @property \App\Model\Table\StoreCardsTable $StoreCards
 */
class StoreCardsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Cards']
        ];
        $this->set('storeCards', $this->paginate($this->StoreCards));
        $this->set('_serialize', ['storeCards']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Card id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeCard = $this->StoreCards->get($id, [
            'contain' => ['Stores', 'Cards']
        ]);
        $this->set('storeCard', $storeCard);
        $this->set('_serialize', ['storeCard']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeCard = $this->StoreCards->newEntity();
        if ($this->request->is('post')) {
            $storeCard = $this->StoreCards->patchEntity($storeCard, $this->request->data);
            if ($this->StoreCards->save($storeCard)) {
                $this->Flash->success('The store card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store card could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreCards->Stores->find('list', ['limit' => 200]);
        $cards = $this->StoreCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('storeCard', 'stores', 'cards'));
        $this->set('_serialize', ['storeCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Card id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeCard = $this->StoreCards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeCard = $this->StoreCards->patchEntity($storeCard, $this->request->data);
            if ($this->StoreCards->save($storeCard)) {
                $this->Flash->success('The store card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store card could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreCards->Stores->find('list', ['limit' => 200]);
        $cards = $this->StoreCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('storeCard', 'stores', 'cards'));
        $this->set('_serialize', ['storeCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Card id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeCard = $this->StoreCards->get($id);
        if ($this->StoreCards->delete($storeCard)) {
            $this->Flash->success('The store card has been deleted.');
        } else {
            $this->Flash->error('The store card could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
