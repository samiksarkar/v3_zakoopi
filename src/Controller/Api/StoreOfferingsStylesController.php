<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * StoreOfferingsStyles Controller
 *
 * @property \App\Model\Table\StoreOfferingsStylesTable $StoreOfferingsStyles
 */
class StoreOfferingsStylesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StoreOfferings', 'Styles']
        ];
        $this->set('storeOfferingsStyles', $this->paginate($this->StoreOfferingsStyles));
        $this->set('_serialize', ['storeOfferingsStyles']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Offerings Style id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeOfferingsStyle = $this->StoreOfferingsStyles->get($id, [
            'contain' => ['StoreOfferings', 'Styles']
        ]);
        $this->set('storeOfferingsStyle', $storeOfferingsStyle);
        $this->set('_serialize', ['storeOfferingsStyle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeOfferingsStyle = $this->StoreOfferingsStyles->newEntity();
        if ($this->request->is('post')) {
            $storeOfferingsStyle = $this->StoreOfferingsStyles->patchEntity($storeOfferingsStyle, $this->request->data);
            if ($this->StoreOfferingsStyles->save($storeOfferingsStyle)) {
                $this->Flash->success('The store offerings style has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offerings style could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->StoreOfferingsStyles->StoreOfferings->find('list', ['limit' => 200]);
        $styles = $this->StoreOfferingsStyles->Styles->find('list', ['limit' => 200]);
        $this->set(compact('storeOfferingsStyle', 'storeOfferings', 'styles'));
        $this->set('_serialize', ['storeOfferingsStyle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Offerings Style id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeOfferingsStyle = $this->StoreOfferingsStyles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeOfferingsStyle = $this->StoreOfferingsStyles->patchEntity($storeOfferingsStyle, $this->request->data);
            if ($this->StoreOfferingsStyles->save($storeOfferingsStyle)) {
                $this->Flash->success('The store offerings style has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store offerings style could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->StoreOfferingsStyles->StoreOfferings->find('list', ['limit' => 200]);
        $styles = $this->StoreOfferingsStyles->Styles->find('list', ['limit' => 200]);
        $this->set(compact('storeOfferingsStyle', 'storeOfferings', 'styles'));
        $this->set('_serialize', ['storeOfferingsStyle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Offerings Style id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeOfferingsStyle = $this->StoreOfferingsStyles->get($id);
        if ($this->StoreOfferingsStyles->delete($storeOfferingsStyle)) {
            $this->Flash->success('The store offerings style has been deleted.');
        } else {
            $this->Flash->error('The store offerings style could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
