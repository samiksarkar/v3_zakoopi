<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Stores Controller
 *
 * @property \App\Model\Table\StoresTable $Stores
 */
class StoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Brands']
        ];
        $this->set('stores', $this->paginate($this->Stores));
        $this->set('_serialize', ['stores']);
    }

    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $store = $this->Stores->get($id, [
            'contain' => ['Cities', 'Brands', 'HomepageAds', 'ReportErrors', 'SaleHotDeals', 'SaleTownDeals', 'SearchAds', 'StoreAds', 'StoreCards', 'StoreImages', 'StoreOfferings', 'StoreRatings', 'StoreReviews', 'UserCheckins', 'UserFavourites']
        ]);
        $this->set('store', $store);
        $this->set('_serialize', ['store']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $store = $this->Stores->newEntity();
        if ($this->request->is('post')) {
            $store = $this->Stores->patchEntity($store, $this->request->data);
            if ($this->Stores->save($store)) {
                $this->Flash->success('The store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store could not be saved. Please, try again.');
            }
        }
        $cities = $this->Stores->Cities->find('list', ['limit' => 200]);
        $brands = $this->Stores->Brands->find('list', ['limit' => 200]);
        $this->set(compact('store', 'cities', 'brands'));
        $this->set('_serialize', ['store']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $store = $this->Stores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $store = $this->Stores->patchEntity($store, $this->request->data);
            if ($this->Stores->save($store)) {
                $this->Flash->success('The store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The store could not be saved. Please, try again.');
            }
        }
        $cities = $this->Stores->Cities->find('list', ['limit' => 200]);
        $brands = $this->Stores->Brands->find('list', ['limit' => 200]);
        $this->set(compact('store', 'cities', 'brands'));
        $this->set('_serialize', ['store']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->Stores->get($id);
        if ($this->Stores->delete($store)) {
            $this->Flash->success('The store has been deleted.');
        } else {
            $this->Flash->error('The store could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
