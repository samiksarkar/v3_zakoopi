<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegionsStoreAds Controller
 *
 * @property \App\Model\Table\RegionsStoreAdsTable $RegionsStoreAds
 */
class RegionsStoreAdsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StoreAds', 'Regions']
        ];
        $this->set('regionsStoreAds', $this->paginate($this->RegionsStoreAds));
        $this->set('_serialize', ['regionsStoreAds']);
    }

    /**
     * View method
     *
     * @param string|null $id Regions Store Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regionsStoreAd = $this->RegionsStoreAds->get($id, [
            'contain' => ['StoreAds', 'Regions']
        ]);
        $this->set('regionsStoreAd', $regionsStoreAd);
        $this->set('_serialize', ['regionsStoreAd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regionsStoreAd = $this->RegionsStoreAds->newEntity();
        if ($this->request->is('post')) {
            $regionsStoreAd = $this->RegionsStoreAds->patchEntity($regionsStoreAd, $this->request->data);
            if ($this->RegionsStoreAds->save($regionsStoreAd)) {
                $this->Flash->success('The regions store ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The regions store ad could not be saved. Please, try again.');
            }
        }
        $storeAds = $this->RegionsStoreAds->StoreAds->find('list', ['limit' => 200]);
        $regions = $this->RegionsStoreAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('regionsStoreAd', 'storeAds', 'regions'));
        $this->set('_serialize', ['regionsStoreAd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regions Store Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regionsStoreAd = $this->RegionsStoreAds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regionsStoreAd = $this->RegionsStoreAds->patchEntity($regionsStoreAd, $this->request->data);
            if ($this->RegionsStoreAds->save($regionsStoreAd)) {
                $this->Flash->success('The regions store ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The regions store ad could not be saved. Please, try again.');
            }
        }
        $storeAds = $this->RegionsStoreAds->StoreAds->find('list', ['limit' => 200]);
        $regions = $this->RegionsStoreAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('regionsStoreAd', 'storeAds', 'regions'));
        $this->set('_serialize', ['regionsStoreAd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regions Store Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regionsStoreAd = $this->RegionsStoreAds->get($id);
        if ($this->RegionsStoreAds->delete($regionsStoreAd)) {
            $this->Flash->success('The regions store ad has been deleted.');
        } else {
            $this->Flash->error('The regions store ad could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
