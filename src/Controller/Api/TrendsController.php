<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Trends Controller
 *
 * @property \App\Model\Table\TrendsTable $Trends
 */
class TrendsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities']
        ];
        $this->set('trends', $this->paginate($this->Trends));
        $this->set('_serialize', ['trends']);
    }

    /**
     * View method
     *
     * @param string|null $id Trend id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trend = $this->Trends->get($id, [
            'contain' => ['Cities', 'TrendCities', 'TrendOfferings']
        ]);
        $this->set('trend', $trend);
        $this->set('_serialize', ['trend']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trend = $this->Trends->newEntity();
        if ($this->request->is('post')) {
            $trend = $this->Trends->patchEntity($trend, $this->request->data);
            if ($this->Trends->save($trend)) {
                $this->Flash->success('The trend has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend could not be saved. Please, try again.');
            }
        }
        $cities = $this->Trends->Cities->find('list', ['limit' => 200]);
        $this->set(compact('trend', 'cities'));
        $this->set('_serialize', ['trend']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trend id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trend = $this->Trends->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trend = $this->Trends->patchEntity($trend, $this->request->data);
            if ($this->Trends->save($trend)) {
                $this->Flash->success('The trend has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend could not be saved. Please, try again.');
            }
        }
        $cities = $this->Trends->Cities->find('list', ['limit' => 200]);
        $this->set(compact('trend', 'cities'));
        $this->set('_serialize', ['trend']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trend id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trend = $this->Trends->get($id);
        if ($this->Trends->delete($trend)) {
            $this->Flash->success('The trend has been deleted.');
        } else {
            $this->Flash->error('The trend could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
