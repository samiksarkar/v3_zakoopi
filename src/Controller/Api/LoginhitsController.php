<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Loginhits Controller
 *
 * @property \App\Model\Table\LoginhitsTable $Loginhits
 */
class LoginhitsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('loginhits', $this->paginate($this->Loginhits));
        $this->set('_serialize', ['loginhits']);
    }

    /**
     * View method
     *
     * @param string|null $id Loginhit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loginhit = $this->Loginhits->get($id, [
            'contain' => []
        ]);
        $this->set('loginhit', $loginhit);
        $this->set('_serialize', ['loginhit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loginhit = $this->Loginhits->newEntity();
        if ($this->request->is('post')) {
            $loginhit = $this->Loginhits->patchEntity($loginhit, $this->request->data);
            if ($this->Loginhits->save($loginhit)) {
                $this->Flash->success('The loginhit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The loginhit could not be saved. Please, try again.');
            }
        }
        $this->set(compact('loginhit'));
        $this->set('_serialize', ['loginhit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Loginhit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loginhit = $this->Loginhits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loginhit = $this->Loginhits->patchEntity($loginhit, $this->request->data);
            if ($this->Loginhits->save($loginhit)) {
                $this->Flash->success('The loginhit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The loginhit could not be saved. Please, try again.');
            }
        }
        $this->set(compact('loginhit'));
        $this->set('_serialize', ['loginhit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Loginhit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loginhit = $this->Loginhits->get($id);
        if ($this->Loginhits->delete($loginhit)) {
            $this->Flash->success('The loginhit has been deleted.');
        } else {
            $this->Flash->error('The loginhit could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
