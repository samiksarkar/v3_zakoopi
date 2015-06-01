<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fabrics Controller
 *
 * @property \App\Model\Table\FabricsTable $Fabrics
 */
class FabricsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('fabrics', $this->paginate($this->Fabrics));
        $this->set('_serialize', ['fabrics']);
    }

    /**
     * View method
     *
     * @param string|null $id Fabric id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabric = $this->Fabrics->get($id, [
            'contain' => ['StoreOfferings']
        ]);
        $this->set('fabric', $fabric);
        $this->set('_serialize', ['fabric']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabric = $this->Fabrics->newEntity();
        if ($this->request->is('post')) {
            $fabric = $this->Fabrics->patchEntity($fabric, $this->request->data);
            if ($this->Fabrics->save($fabric)) {
                $this->Flash->success('The fabric has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The fabric could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->Fabrics->StoreOfferings->find('list', ['limit' => 200]);
        $this->set(compact('fabric', 'storeOfferings'));
        $this->set('_serialize', ['fabric']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabric id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabric = $this->Fabrics->get($id, [
            'contain' => ['StoreOfferings']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabric = $this->Fabrics->patchEntity($fabric, $this->request->data);
            if ($this->Fabrics->save($fabric)) {
                $this->Flash->success('The fabric has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The fabric could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->Fabrics->StoreOfferings->find('list', ['limit' => 200]);
        $this->set(compact('fabric', 'storeOfferings'));
        $this->set('_serialize', ['fabric']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabric id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fabric = $this->Fabrics->get($id);
        if ($this->Fabrics->delete($fabric)) {
            $this->Flash->success('The fabric has been deleted.');
        } else {
            $this->Flash->error('The fabric could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
