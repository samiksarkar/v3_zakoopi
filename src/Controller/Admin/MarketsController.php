<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Markets Controller
 *
 * @property \App\Model\Table\MarketsTable $Markets
 */
class MarketsController extends AppController
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
        $this->set('markets', $this->paginate($this->Markets));
        $this->set('_serialize', ['markets']);
    }

    /**
     * View method
     *
     * @param string|null $id Market id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $market = $this->Markets->get($id, [
            'contain' => ['Cities']
        ]);
        $this->set('market', $market);
        $this->set('_serialize', ['market']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $market = $this->Markets->newEntity();
        if ($this->request->is('post')) {
            $market = $this->Markets->patchEntity($market, $this->request->data);
            if ($this->Markets->save($market)) {
                $this->Flash->success('The market has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The market could not be saved. Please, try again.');
            }
        }
        $cities = $this->Markets->Cities->find('list', ['limit' => 200]);
        $this->set(compact('market', 'cities'));
        $this->set('_serialize', ['market']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Market id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $market = $this->Markets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $market = $this->Markets->patchEntity($market, $this->request->data);
            if ($this->Markets->save($market)) {
                $this->Flash->success('The market has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The market could not be saved. Please, try again.');
            }
        }
        $cities = $this->Markets->Cities->find('list', ['limit' => 200]);
        $this->set(compact('market', 'cities'));
        $this->set('_serialize', ['market']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Market id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $market = $this->Markets->get($id);
        if ($this->Markets->delete($market)) {
            $this->Flash->success('The market has been deleted.');
        } else {
            $this->Flash->error('The market could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
