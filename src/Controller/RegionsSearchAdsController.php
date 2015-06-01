<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegionsSearchAds Controller
 *
 * @property \App\Model\Table\RegionsSearchAdsTable $RegionsSearchAds
 */
class RegionsSearchAdsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SearchAds', 'Regions']
        ];
        $this->set('regionsSearchAds', $this->paginate($this->RegionsSearchAds));
        $this->set('_serialize', ['regionsSearchAds']);
    }

    /**
     * View method
     *
     * @param string|null $id Regions Search Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regionsSearchAd = $this->RegionsSearchAds->get($id, [
            'contain' => ['SearchAds', 'Regions']
        ]);
        $this->set('regionsSearchAd', $regionsSearchAd);
        $this->set('_serialize', ['regionsSearchAd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regionsSearchAd = $this->RegionsSearchAds->newEntity();
        if ($this->request->is('post')) {
            $regionsSearchAd = $this->RegionsSearchAds->patchEntity($regionsSearchAd, $this->request->data);
            if ($this->RegionsSearchAds->save($regionsSearchAd)) {
                $this->Flash->success('The regions search ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The regions search ad could not be saved. Please, try again.');
            }
        }
        $searchAds = $this->RegionsSearchAds->SearchAds->find('list', ['limit' => 200]);
        $regions = $this->RegionsSearchAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('regionsSearchAd', 'searchAds', 'regions'));
        $this->set('_serialize', ['regionsSearchAd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regions Search Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regionsSearchAd = $this->RegionsSearchAds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regionsSearchAd = $this->RegionsSearchAds->patchEntity($regionsSearchAd, $this->request->data);
            if ($this->RegionsSearchAds->save($regionsSearchAd)) {
                $this->Flash->success('The regions search ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The regions search ad could not be saved. Please, try again.');
            }
        }
        $searchAds = $this->RegionsSearchAds->SearchAds->find('list', ['limit' => 200]);
        $regions = $this->RegionsSearchAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('regionsSearchAd', 'searchAds', 'regions'));
        $this->set('_serialize', ['regionsSearchAd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regions Search Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regionsSearchAd = $this->RegionsSearchAds->get($id);
        if ($this->RegionsSearchAds->delete($regionsSearchAd)) {
            $this->Flash->success('The regions search ad has been deleted.');
        } else {
            $this->Flash->error('The regions search ad could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
