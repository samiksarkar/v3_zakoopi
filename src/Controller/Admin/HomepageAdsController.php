<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * HomepageAds Controller
 *
 * @property \App\Model\Table\HomepageAdsTable $HomepageAds
 */
class HomepageAdsController extends AppController
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
        $this->set('homepageAds', $this->paginate($this->HomepageAds));
        $this->set('_serialize', ['homepageAds']);
    }

    /**
     * View method
     *
     * @param string|null $id Homepage Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homepageAd = $this->HomepageAds->get($id, [
            'contain' => ['Stores', 'Regions']
        ]);
        $this->set('homepageAd', $homepageAd);
        $this->set('_serialize', ['homepageAd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homepageAd = $this->HomepageAds->newEntity();
        if ($this->request->is('post')) {
            $homepageAd = $this->HomepageAds->patchEntity($homepageAd, $this->request->data);
            if ($this->HomepageAds->save($homepageAd)) {
                $this->Flash->success('The homepage ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The homepage ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->HomepageAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->HomepageAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('homepageAd', 'stores', 'regions'));
        $this->set('_serialize', ['homepageAd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Homepage Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homepageAd = $this->HomepageAds->get($id, [
            'contain' => ['Regions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homepageAd = $this->HomepageAds->patchEntity($homepageAd, $this->request->data);
            if ($this->HomepageAds->save($homepageAd)) {
                $this->Flash->success('The homepage ad has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The homepage ad could not be saved. Please, try again.');
            }
        }
        $stores = $this->HomepageAds->Stores->find('list', ['limit' => 200]);
        $regions = $this->HomepageAds->Regions->find('list', ['limit' => 200]);
        $this->set(compact('homepageAd', 'stores', 'regions'));
        $this->set('_serialize', ['homepageAd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Homepage Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homepageAd = $this->HomepageAds->get($id);
        if ($this->HomepageAds->delete($homepageAd)) {
            $this->Flash->success('The homepage ad has been deleted.');
        } else {
            $this->Flash->error('The homepage ad could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
