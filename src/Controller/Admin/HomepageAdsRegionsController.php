<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * HomepageAdsRegions Controller
 *
 * @property \App\Model\Table\HomepageAdsRegionsTable $HomepageAdsRegions
 */
class HomepageAdsRegionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HomepageAds', 'Regions']
        ];
        $this->set('homepageAdsRegions', $this->paginate($this->HomepageAdsRegions));
        $this->set('_serialize', ['homepageAdsRegions']);
    }

    /**
     * View method
     *
     * @param string|null $id Homepage Ads Region id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homepageAdsRegion = $this->HomepageAdsRegions->get($id, [
            'contain' => ['HomepageAds', 'Regions']
        ]);
        $this->set('homepageAdsRegion', $homepageAdsRegion);
        $this->set('_serialize', ['homepageAdsRegion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homepageAdsRegion = $this->HomepageAdsRegions->newEntity();
        if ($this->request->is('post')) {
            $homepageAdsRegion = $this->HomepageAdsRegions->patchEntity($homepageAdsRegion, $this->request->data);
            if ($this->HomepageAdsRegions->save($homepageAdsRegion)) {
                $this->Flash->success('The homepage ads region has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The homepage ads region could not be saved. Please, try again.');
            }
        }
        $homepageAds = $this->HomepageAdsRegions->HomepageAds->find('list', ['limit' => 200]);
        $regions = $this->HomepageAdsRegions->Regions->find('list', ['limit' => 200]);
        $this->set(compact('homepageAdsRegion', 'homepageAds', 'regions'));
        $this->set('_serialize', ['homepageAdsRegion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Homepage Ads Region id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homepageAdsRegion = $this->HomepageAdsRegions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homepageAdsRegion = $this->HomepageAdsRegions->patchEntity($homepageAdsRegion, $this->request->data);
            if ($this->HomepageAdsRegions->save($homepageAdsRegion)) {
                $this->Flash->success('The homepage ads region has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The homepage ads region could not be saved. Please, try again.');
            }
        }
        $homepageAds = $this->HomepageAdsRegions->HomepageAds->find('list', ['limit' => 200]);
        $regions = $this->HomepageAdsRegions->Regions->find('list', ['limit' => 200]);
        $this->set(compact('homepageAdsRegion', 'homepageAds', 'regions'));
        $this->set('_serialize', ['homepageAdsRegion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Homepage Ads Region id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homepageAdsRegion = $this->HomepageAdsRegions->get($id);
        if ($this->HomepageAdsRegions->delete($homepageAdsRegion)) {
            $this->Flash->success('The homepage ads region has been deleted.');
        } else {
            $this->Flash->error('The homepage ads region could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
