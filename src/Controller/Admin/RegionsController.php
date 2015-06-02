<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Regions Controller
 *
 * @property \App\Model\Table\RegionsTable $Regions
 */
class RegionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('regions', $this->paginate($this->Regions));
        $this->set('_serialize', ['regions']);
    }

    /**
     * View method
     *
     * @param string|null $id Region id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $region = $this->Regions->get($id, [
            'contain' => ['HomepageAds', 'SearchAds', 'StoreAds']
        ]);
        $this->set('region', $region);
        $this->set('_serialize', ['region']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $region = $this->Regions->newEntity();
        if ($this->request->is('post')) {
            $region = $this->Regions->patchEntity($region, $this->request->data);
            if ($this->Regions->save($region)) {
                $this->Flash->success('The region has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The region could not be saved. Please, try again.');
            }
        }
        $homepageAds = $this->Regions->HomepageAds->find('list', ['limit' => 200]);
        $searchAds = $this->Regions->SearchAds->find('list', ['limit' => 200]);
        $storeAds = $this->Regions->StoreAds->find('list', ['limit' => 200]);
        $this->set(compact('region', 'homepageAds', 'searchAds', 'storeAds'));
        $this->set('_serialize', ['region']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Region id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $region = $this->Regions->get($id, [
            'contain' => ['HomepageAds', 'SearchAds', 'StoreAds']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $region = $this->Regions->patchEntity($region, $this->request->data);
            if ($this->Regions->save($region)) {
                $this->Flash->success('The region has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The region could not be saved. Please, try again.');
            }
        }
        $homepageAds = $this->Regions->HomepageAds->find('list', ['limit' => 200]);
        $searchAds = $this->Regions->SearchAds->find('list', ['limit' => 200]);
        $storeAds = $this->Regions->StoreAds->find('list', ['limit' => 200]);
        $this->set(compact('region', 'homepageAds', 'searchAds', 'storeAds'));
        $this->set('_serialize', ['region']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Region id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $region = $this->Regions->get($id);
        if ($this->Regions->delete($region)) {
            $this->Flash->success('The region has been deleted.');
        } else {
            $this->Flash->error('The region could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
