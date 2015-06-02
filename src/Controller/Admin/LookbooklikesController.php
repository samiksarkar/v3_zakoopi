<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Lookbooklikes Controller
 *
 * @property \App\Model\Table\LookbooklikesTable $Lookbooklikes
 */
class LookbooklikesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lookbooks', 'Users']
        ];
        $this->set('lookbooklikes', $this->paginate($this->Lookbooklikes));
        $this->set('_serialize', ['lookbooklikes']);
    }

    /**
     * View method
     *
     * @param string|null $id Lookbooklike id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lookbooklike = $this->Lookbooklikes->get($id, [
            'contain' => ['Lookbooks', 'Users']
        ]);
        $this->set('lookbooklike', $lookbooklike);
        $this->set('_serialize', ['lookbooklike']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lookbooklike = $this->Lookbooklikes->newEntity();
        if ($this->request->is('post')) {
            $lookbooklike = $this->Lookbooklikes->patchEntity($lookbooklike, $this->request->data);
            if ($this->Lookbooklikes->save($lookbooklike)) {
                $this->Flash->success('The lookbooklike has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbooklike could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Lookbooklikes->Lookbooks->find('list', ['limit' => 200]);
        $users = $this->Lookbooklikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbooklike', 'lookbooks', 'users'));
        $this->set('_serialize', ['lookbooklike']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lookbooklike id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lookbooklike = $this->Lookbooklikes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lookbooklike = $this->Lookbooklikes->patchEntity($lookbooklike, $this->request->data);
            if ($this->Lookbooklikes->save($lookbooklike)) {
                $this->Flash->success('The lookbooklike has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbooklike could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Lookbooklikes->Lookbooks->find('list', ['limit' => 200]);
        $users = $this->Lookbooklikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbooklike', 'lookbooks', 'users'));
        $this->set('_serialize', ['lookbooklike']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lookbooklike id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lookbooklike = $this->Lookbooklikes->get($id);
        if ($this->Lookbooklikes->delete($lookbooklike)) {
            $this->Flash->success('The lookbooklike has been deleted.');
        } else {
            $this->Flash->error('The lookbooklike could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
