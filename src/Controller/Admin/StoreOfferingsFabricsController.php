<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * StoreOfferingsFabrics Controller
 *
 * @property \App\Model\Table\StoreOfferingsFabricsTable $StoreOfferingsFabrics
 */
class StoreOfferingsFabricsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StoreOfferings', 'Fabrics']
        ];
        $this->set('storeOfferingsFabrics', $this->paginate($this->StoreOfferingsFabrics));
        $this->set('_serialize', ['storeOfferingsFabrics']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Offerings Fabric id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeOfferingsFabric = $this->StoreOfferingsFabrics->get($id, [
            'contain' => ['StoreOfferings', 'Fabrics']
        ]);
        $this->set('storeOfferingsFabric', $storeOfferingsFabric);
        $this->set('_serialize', ['storeOfferingsFabric']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeOfferingsFabric = $this->StoreOfferingsFabrics->newEntity();
        if ($this->request->is('post')) {
            $storeOfferingsFabric = $this->StoreOfferingsFabrics->patchEntity($storeOfferingsFabric, $this->request->data);
            if ($this->StoreOfferingsFabrics->save($storeOfferingsFabric)) {
                $this->Flash->success('The store offerings fabric has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offerings fabric could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->StoreOfferingsFabrics->StoreOfferings->find('list', ['limit' => 200]);
        $fabrics = $this->StoreOfferingsFabrics->Fabrics->find('list', ['limit' => 200]);
        $this->set(compact('storeOfferingsFabric', 'storeOfferings', 'fabrics'));
        $this->set('_serialize', ['storeOfferingsFabric']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Offerings Fabric id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeOfferingsFabric = $this->StoreOfferingsFabrics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeOfferingsFabric = $this->StoreOfferingsFabrics->patchEntity($storeOfferingsFabric, $this->request->data);
            if ($this->StoreOfferingsFabrics->save($storeOfferingsFabric)) {
                $this->Flash->success('The store offerings fabric has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offerings fabric could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->StoreOfferingsFabrics->StoreOfferings->find('list', ['limit' => 200]);
        $fabrics = $this->StoreOfferingsFabrics->Fabrics->find('list', ['limit' => 200]);
        $this->set(compact('storeOfferingsFabric', 'storeOfferings', 'fabrics'));
        $this->set('_serialize', ['storeOfferingsFabric']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Offerings Fabric id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeOfferingsFabric = $this->StoreOfferingsFabrics->get($id);
        if ($this->StoreOfferingsFabrics->delete($storeOfferingsFabric)) {
            $this->Flash->success('The store offerings fabric has been deleted.');
        } else {
            $this->Flash->error('The store offerings fabric could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
