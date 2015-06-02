<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * SaleTownMarkets Controller
 *
 * @property \App\Model\Table\SaleTownMarketsTable $SaleTownMarkets
 */
class SaleTownMarketsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Markets']
        ];
        $this->set('saleTownMarkets', $this->paginate($this->SaleTownMarkets));
        $this->set('_serialize', ['saleTownMarkets']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale Town Market id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleTownMarket = $this->SaleTownMarkets->get($id, [
            'contain' => ['Cities', 'Markets']
        ]);
        $this->set('saleTownMarket', $saleTownMarket);
        $this->set('_serialize', ['saleTownMarket']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleTownMarket = $this->SaleTownMarkets->newEntity();
        if ($this->request->is('post')) {
            $saleTownMarket = $this->SaleTownMarkets->patchEntity($saleTownMarket, $this->request->data);
            if ($this->SaleTownMarkets->save($saleTownMarket)) {
                $this->Flash->success('The sale town market has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town market could not be saved. Please, try again.');
            }
        }
        $cities = $this->SaleTownMarkets->Cities->find('list', ['limit' => 200]);
        $markets = $this->SaleTownMarkets->Markets->find('list', ['limit' => 200]);
        $this->set(compact('saleTownMarket', 'cities', 'markets'));
        $this->set('_serialize', ['saleTownMarket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Town Market id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleTownMarket = $this->SaleTownMarkets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleTownMarket = $this->SaleTownMarkets->patchEntity($saleTownMarket, $this->request->data);
            if ($this->SaleTownMarkets->save($saleTownMarket)) {
                $this->Flash->success('The sale town market has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town market could not be saved. Please, try again.');
            }
        }
        $cities = $this->SaleTownMarkets->Cities->find('list', ['limit' => 200]);
        $markets = $this->SaleTownMarkets->Markets->find('list', ['limit' => 200]);
        $this->set(compact('saleTownMarket', 'cities', 'markets'));
        $this->set('_serialize', ['saleTownMarket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Town Market id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleTownMarket = $this->SaleTownMarkets->get($id);
        if ($this->SaleTownMarkets->delete($saleTownMarket)) {
            $this->Flash->success('The sale town market has been deleted.');
        } else {
            $this->Flash->error('The sale town market could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
