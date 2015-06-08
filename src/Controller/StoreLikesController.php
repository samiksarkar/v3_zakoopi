<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoreLikes Controller
 *
 * @property \App\Model\Table\StoreLikesTable $StoreLikes
 */
class StoreLikesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Users']
        ];
        $this->set('storeLikes', $this->paginate($this->StoreLikes));
        $this->set('_serialize', ['storeLikes']);
    }

    /**
     * View method
     *
     * @param string|null $id Store Like id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeLike = $this->StoreLikes->get($id, [
            'contain' => ['Stores', 'Users']
        ]);
        $this->set('storeLike', $storeLike);
        $this->set('_serialize', ['storeLike']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeLike = $this->StoreLikes->newEntity();
        if ($this->request->is('post')) {
            $storeLike = $this->StoreLikes->patchEntity($storeLike, $this->request->data);
            if ($this->StoreLikes->save($storeLike)) {
                $this->Flash->success(__('The store like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The store like could not be saved. Please, try again.'));
            }
        }
        $stores = $this->StoreLikes->Stores->find('list', ['limit' => 200]);
        $users = $this->StoreLikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('storeLike', 'stores', 'users'));
        $this->set('_serialize', ['storeLike']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Like id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeLike = $this->StoreLikes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeLike = $this->StoreLikes->patchEntity($storeLike, $this->request->data);
            if ($this->StoreLikes->save($storeLike)) {
                $this->Flash->success(__('The store like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The store like could not be saved. Please, try again.'));
            }
        }
        $stores = $this->StoreLikes->Stores->find('list', ['limit' => 200]);
        $users = $this->StoreLikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('storeLike', 'stores', 'users'));
        $this->set('_serialize', ['storeLike']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Like id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeLike = $this->StoreLikes->get($id);
        if ($this->StoreLikes->delete($storeLike)) {
            $this->Flash->success(__('The store like has been deleted.'));
        } else {
            $this->Flash->error(__('The store like could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
