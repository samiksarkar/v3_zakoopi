<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * SaleTownDeals Controller
 *
 * @property \App\Model\Table\SaleTownDealsTable $SaleTownDeals
 */
class SaleTownDealsController extends AppController
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
        $this->set('saleTownDeals', $this->paginate($this->SaleTownDeals));
        $this->set('_serialize', ['saleTownDeals']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale Town Deal id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleTownDeal = $this->SaleTownDeals->get($id, [
            'contain' => ['Stores']
        ]);
        $this->set('saleTownDeal', $saleTownDeal);
        $this->set('_serialize', ['saleTownDeal']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleTownDeal = $this->SaleTownDeals->newEntity();
        if ($this->request->is('post')) {
            $saleTownDeal = $this->SaleTownDeals->patchEntity($saleTownDeal, $this->request->data);
            if ($this->SaleTownDeals->save($saleTownDeal)) {
                $this->Flash->success('The sale town deal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town deal could not be saved. Please, try again.');
            }
        }
        $stores = $this->SaleTownDeals->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleTownDeal', 'stores'));
        $this->set('_serialize', ['saleTownDeal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Town Deal id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleTownDeal = $this->SaleTownDeals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleTownDeal = $this->SaleTownDeals->patchEntity($saleTownDeal, $this->request->data);
            if ($this->SaleTownDeals->save($saleTownDeal)) {
                $this->Flash->success('The sale town deal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale town deal could not be saved. Please, try again.');
            }
        }
        $stores = $this->SaleTownDeals->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleTownDeal', 'stores'));
        $this->set('_serialize', ['saleTownDeal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Town Deal id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleTownDeal = $this->SaleTownDeals->get($id);
        if ($this->SaleTownDeals->delete($saleTownDeal)) {
            $this->Flash->success('The sale town deal has been deleted.');
        } else {
            $this->Flash->error('The sale town deal could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
