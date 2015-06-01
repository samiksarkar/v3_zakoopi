<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TrendOfferings Controller
 *
 * @property \App\Model\Table\TrendOfferingsTable $TrendOfferings
 */
class TrendOfferingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Trends', 'Offerings']
        ];
        $this->set('trendOfferings', $this->paginate($this->TrendOfferings));
        $this->set('_serialize', ['trendOfferings']);
    }

    /**
     * View method
     *
     * @param string|null $id Trend Offering id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trendOffering = $this->TrendOfferings->get($id, [
            'contain' => ['Trends', 'Offerings']
        ]);
        $this->set('trendOffering', $trendOffering);
        $this->set('_serialize', ['trendOffering']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trendOffering = $this->TrendOfferings->newEntity();
        if ($this->request->is('post')) {
            $trendOffering = $this->TrendOfferings->patchEntity($trendOffering, $this->request->data);
            if ($this->TrendOfferings->save($trendOffering)) {
                $this->Flash->success('The trend offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend offering could not be saved. Please, try again.');
            }
        }
        $trends = $this->TrendOfferings->Trends->find('list', ['limit' => 200]);
        $offerings = $this->TrendOfferings->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('trendOffering', 'trends', 'offerings'));
        $this->set('_serialize', ['trendOffering']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trend Offering id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trendOffering = $this->TrendOfferings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trendOffering = $this->TrendOfferings->patchEntity($trendOffering, $this->request->data);
            if ($this->TrendOfferings->save($trendOffering)) {
                $this->Flash->success('The trend offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend offering could not be saved. Please, try again.');
            }
        }
        $trends = $this->TrendOfferings->Trends->find('list', ['limit' => 200]);
        $offerings = $this->TrendOfferings->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('trendOffering', 'trends', 'offerings'));
        $this->set('_serialize', ['trendOffering']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trend Offering id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trendOffering = $this->TrendOfferings->get($id);
        if ($this->TrendOfferings->delete($trendOffering)) {
            $this->Flash->success('The trend offering has been deleted.');
        } else {
            $this->Flash->error('The trend offering could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
