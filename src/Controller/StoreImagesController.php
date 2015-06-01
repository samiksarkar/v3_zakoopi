<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoreImages Controller
 *
 * @property \App\Model\Table\StoreImagesTable $StoreImages
 */
class StoreImagesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores']
        ];
        $this->set('storeImages', $this->paginate($this->StoreImages));
        $this->set('_serialize', ['storeImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Image id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeImage = $this->StoreImages->get($id, [
            'contain' => ['Stores']
        ]);
        $this->set('storeImage', $storeImage);
        $this->set('_serialize', ['storeImage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeImage = $this->StoreImages->newEntity();
        if ($this->request->is('post')) {
            $storeImage = $this->StoreImages->patchEntity($storeImage, $this->request->data);
            if ($this->StoreImages->save($storeImage)) {
                $this->Flash->success('The store image has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store image could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreImages->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeImage', 'stores'));
        $this->set('_serialize', ['storeImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Image id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeImage = $this->StoreImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeImage = $this->StoreImages->patchEntity($storeImage, $this->request->data);
            if ($this->StoreImages->save($storeImage)) {
                $this->Flash->success('The store image has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store image could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreImages->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeImage', 'stores'));
        $this->set('_serialize', ['storeImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Image id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeImage = $this->StoreImages->get($id);
        if ($this->StoreImages->delete($storeImage)) {
            $this->Flash->success('The store image has been deleted.');
        } else {
            $this->Flash->error('The store image could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
