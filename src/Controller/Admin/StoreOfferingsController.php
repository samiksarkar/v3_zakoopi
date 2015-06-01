<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * StoreOfferings Controller
 *
 * @property \App\Model\Table\StoreOfferingsTable $StoreOfferings
 */
class StoreOfferingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Offerings']
        ];
        $this->set('storeOfferings', $this->paginate($this->StoreOfferings));
        $this->set('_serialize', ['storeOfferings']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Offering id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeOffering = $this->StoreOfferings->get($id, [
            'contain' => ['Stores', 'Offerings', 'Fabrics', 'Styles']
        ]);
        $this->set('storeOffering', $storeOffering);
        $this->set('_serialize', ['storeOffering']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeOffering = $this->StoreOfferings->newEntity();
        if ($this->request->is('post')) {
            $storeOffering = $this->StoreOfferings->patchEntity($storeOffering, $this->request->data);
            if ($this->StoreOfferings->save($storeOffering)) {
                $this->Flash->success('The store offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offering could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreOfferings->Stores->find('list', ['limit' => 200]);
        $offerings = $this->StoreOfferings->Offerings->find('list', ['limit' => 200]);
        $fabrics = $this->StoreOfferings->Fabrics->find('list', ['limit' => 200]);
        $styles = $this->StoreOfferings->Styles->find('list', ['limit' => 200]);
        $this->set(compact('storeOffering', 'stores', 'offerings', 'fabrics', 'styles'));
        $this->set('_serialize', ['storeOffering']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Offering id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeOffering = $this->StoreOfferings->get($id, [
            'contain' => ['Fabrics', 'Styles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeOffering = $this->StoreOfferings->patchEntity($storeOffering, $this->request->data);
            if ($this->StoreOfferings->save($storeOffering)) {
                $this->Flash->success('The store offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offering could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreOfferings->Stores->find('list', ['limit' => 200]);
        $offerings = $this->StoreOfferings->Offerings->find('list', ['limit' => 200]);
        $fabrics = $this->StoreOfferings->Fabrics->find('list', ['limit' => 200]);
        $styles = $this->StoreOfferings->Styles->find('list', ['limit' => 200]);
        $this->set(compact('storeOffering', 'stores', 'offerings', 'fabrics', 'styles'));
        $this->set('_serialize', ['storeOffering']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Offering id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeOffering = $this->StoreOfferings->get($id);
        if ($this->StoreOfferings->delete($storeOffering)) {
            $this->Flash->success('The store offering has been deleted.');
        } else {
            $this->Flash->error('The store offering could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
