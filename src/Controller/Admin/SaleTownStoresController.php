<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SaleTownStores Controller
 *
 * @property \App\Model\Table\SaleTownStoresTable $SaleTownStores
 */
class SaleTownStoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Stores']
        ];
        $this->set('saleTownStores', $this->paginate($this->SaleTownStores));
        $this->set('_serialize', ['saleTownStores']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale Town Store id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleTownStore = $this->SaleTownStores->get($id, [
            'contain' => ['Cities', 'Stores']
        ]);
        $this->set('saleTownStore', $saleTownStore);
        $this->set('_serialize', ['saleTownStore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleTownStore = $this->SaleTownStores->newEntity();
        if ($this->request->is('post')) {
            $saleTownStore = $this->SaleTownStores->patchEntity($saleTownStore, $this->request->data);
            if ($this->SaleTownStores->save($saleTownStore)) {
                $this->Flash->success('The sale town store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town store could not be saved. Please, try again.');
            }
        }
        $cities = $this->SaleTownStores->Cities->find('list', ['limit' => 200]);
        $stores = $this->SaleTownStores->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleTownStore', 'cities', 'stores'));
        $this->set('_serialize', ['saleTownStore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Town Store id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleTownStore = $this->SaleTownStores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleTownStore = $this->SaleTownStores->patchEntity($saleTownStore, $this->request->data);
            if ($this->SaleTownStores->save($saleTownStore)) {
                $this->Flash->success('The sale town store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town store could not be saved. Please, try again.');
            }
        }
        $cities = $this->SaleTownStores->Cities->find('list', ['limit' => 200]);
        $stores = $this->SaleTownStores->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleTownStore', 'cities', 'stores'));
        $this->set('_serialize', ['saleTownStore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Town Store id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleTownStore = $this->SaleTownStores->get($id);
        if ($this->SaleTownStores->delete($saleTownStore)) {
            $this->Flash->success('The sale town store has been deleted.');
        } else {
            $this->Flash->error('The sale town store could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
