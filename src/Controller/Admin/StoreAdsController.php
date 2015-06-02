<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * StoreAds Controller
 *
 * @property \App\Model\Table\StoreAdsTable $StoreAds
 */
class StoreAdsController extends AppController
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
        $this->set('storeAds', $this->paginate($this->StoreAds));
        $this->set('_serialize', ['storeAds']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeAd = $this->StoreAds->get($id, [
            'contain' => ['Stores', 'Regions']
        ]);
        $this->set('storeAd', $storeAd);
        $this->set('_serialize', ['storeAd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeAd = $this->StoreAds->newEntity();
        if ($this->request->is('post')) {
            $storeAd = $this->StoreAds->patchEntity($storeAd, $this->request->data);
            if ($this->StoreAds->save($storeAd)) {
                $this->Flash->success('The store ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->StoreAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('storeAd', 'stores', 'regions'));
        $this->set('_serialize', ['storeAd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeAd = $this->StoreAds->get($id, [
            'contain' => ['Regions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeAd = $this->StoreAds->patchEntity($storeAd, $this->request->data);
            if ($this->StoreAds->save($storeAd)) {
                $this->Flash->success('The store ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->StoreAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->StoreAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('storeAd', 'stores', 'regions'));
        $this->set('_serialize', ['storeAd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeAd = $this->StoreAds->get($id);
        if ($this->StoreAds->delete($storeAd)) {
            $this->Flash->success('The store ad has been deleted.');
        } else {
            $this->Flash->error('The store ad could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
