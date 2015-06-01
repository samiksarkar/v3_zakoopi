<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SaleHotDeals Controller
 *
 * @property \App\Model\Table\SaleHotDealsTable $SaleHotDeals
 */
class SaleHotDealsController extends AppController
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
        $this->set('saleHotDeals', $this->paginate($this->SaleHotDeals));
        $this->set('_serialize', ['saleHotDeals']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale Hot Deal id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleHotDeal = $this->SaleHotDeals->get($id, [
            'contain' => ['Stores']
        ]);
        $this->set('saleHotDeal', $saleHotDeal);
        $this->set('_serialize', ['saleHotDeal']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleHotDeal = $this->SaleHotDeals->newEntity();
        if ($this->request->is('post')) {
            $saleHotDeal = $this->SaleHotDeals->patchEntity($saleHotDeal, $this->request->data);
            if ($this->SaleHotDeals->save($saleHotDeal)) {
                $this->Flash->success('The sale hot deal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale hot deal could not be saved. Please, try again.');
            }
        }
        $stores = $this->SaleHotDeals->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleHotDeal', 'stores'));
        $this->set('_serialize', ['saleHotDeal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Hot Deal id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleHotDeal = $this->SaleHotDeals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleHotDeal = $this->SaleHotDeals->patchEntity($saleHotDeal, $this->request->data);
            if ($this->SaleHotDeals->save($saleHotDeal)) {
                $this->Flash->success('The sale hot deal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sale hot deal could not be saved. Please, try again.');
            }
        }
        $stores = $this->SaleHotDeals->Stores->find('list', ['limit' => 200]);
        $this->set(compact('saleHotDeal', 'stores'));
        $this->set('_serialize', ['saleHotDeal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Hot Deal id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleHotDeal = $this->SaleHotDeals->get($id);
        if ($this->SaleHotDeals->delete($saleHotDeal)) {
            $this->Flash->success('The sale hot deal has been deleted.');
        } else {
            $this->Flash->error('The sale hot deal could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
