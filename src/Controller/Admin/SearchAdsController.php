<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SearchAds Controller
 *
 * @property \App\Model\Table\SearchAdsTable $SearchAds
 */
class SearchAdsController extends AppController
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
        $this->set('searchAds', $this->paginate($this->SearchAds));
        $this->set('_serialize', ['searchAds']);
    }

    /**
     * View method
     *
     * @param string|null $id Search Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $searchAd = $this->SearchAds->get($id, [
            'contain' => ['Stores', 'Regions']
        ]);
        $this->set('searchAd', $searchAd);
        $this->set('_serialize', ['searchAd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $searchAd = $this->SearchAds->newEntity();
        if ($this->request->is('post')) {
            $searchAd = $this->SearchAds->patchEntity($searchAd, $this->request->data);
            if ($this->SearchAds->save($searchAd)) {
                $this->Flash->success('The search ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The search ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->SearchAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->SearchAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('searchAd', 'stores', 'regions'));
        $this->set('_serialize', ['searchAd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Search Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $searchAd = $this->SearchAds->get($id, [
            'contain' => ['Regions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $searchAd = $this->SearchAds->patchEntity($searchAd, $this->request->data);
            if ($this->SearchAds->save($searchAd)) {
                $this->Flash->success('The search ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The search ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->SearchAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->SearchAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('searchAd', 'stores', 'regions'));
        $this->set('_serialize', ['searchAd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Search Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $searchAd = $this->SearchAds->get($id);
        if ($this->SearchAds->delete($searchAd)) {
            $this->Flash->success('The search ad has been deleted.');
        } else {
            $this->Flash->error('The search ad could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
