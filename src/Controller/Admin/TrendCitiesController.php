<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TrendCities Controller
 *
 * @property \App\Model\Table\TrendCitiesTable $TrendCities
 */
class TrendCitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Trends']
        ];
        $this->set('trendCities', $this->paginate($this->TrendCities));
        $this->set('_serialize', ['trendCities']);
    }

    /**
     * View method
     *
     * @param string|null $id Trend City id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trendCity = $this->TrendCities->get($id, [
            'contain' => ['Cities', 'Trends']
        ]);
        $this->set('trendCity', $trendCity);
        $this->set('_serialize', ['trendCity']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trendCity = $this->TrendCities->newEntity();
        if ($this->request->is('post')) {
            $trendCity = $this->TrendCities->patchEntity($trendCity, $this->request->data);
            if ($this->TrendCities->save($trendCity)) {
                $this->Flash->success('The trend city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend city could not be saved. Please, try again.');
            }
        }
        $cities = $this->TrendCities->Cities->find('list', ['limit' => 200]);
        $trends = $this->TrendCities->Trends->find('list', ['limit' => 200]);
        $this->set(compact('trendCity', 'cities', 'trends'));
        $this->set('_serialize', ['trendCity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trend City id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trendCity = $this->TrendCities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trendCity = $this->TrendCities->patchEntity($trendCity, $this->request->data);
            if ($this->TrendCities->save($trendCity)) {
                $this->Flash->success('The trend city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend city could not be saved. Please, try again.');
            }
        }
        $cities = $this->TrendCities->Cities->find('list', ['limit' => 200]);
        $trends = $this->TrendCities->Trends->find('list', ['limit' => 200]);
        $this->set(compact('trendCity', 'cities', 'trends'));
        $this->set('_serialize', ['trendCity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trend City id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trendCity = $this->TrendCities->get($id);
        if ($this->TrendCities->delete($trendCity)) {
            $this->Flash->success('The trend city has been deleted.');
        } else {
            $this->Flash->error('The trend city could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
