<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Lookbooks Controller
 *
 * @property \App\Model\Table\LookbooksTable $Lookbooks
 */
class LookbooksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('lookbooks', $this->paginate($this->Lookbooks));
        $this->set('_serialize', ['lookbooks']);
    }

    /**
     * View method
     *
     * @param string|null $id Lookbook id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lookbook = $this->Lookbooks->get($id, [
            'contain' => ['Users', 'Cards', 'Lookbookcomments', 'Lookbooklikes']
        ]);
        $this->set('lookbook', $lookbook);
        $this->set('_serialize', ['lookbook']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lookbook = $this->Lookbooks->newEntity();
        if ($this->request->is('post')) {
            $lookbook = $this->Lookbooks->patchEntity($lookbook, $this->request->data);
            if ($this->Lookbooks->save($lookbook)) {
                $this->Flash->success('The lookbook has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbook could not be saved. Please, try again.');
            }
        }
        $users = $this->Lookbooks->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbook', 'users'));
        $this->set('_serialize', ['lookbook']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lookbook id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lookbook = $this->Lookbooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lookbook = $this->Lookbooks->patchEntity($lookbook, $this->request->data);
            if ($this->Lookbooks->save($lookbook)) {
                $this->Flash->success('The lookbook has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbook could not be saved. Please, try again.');
            }
        }
        $users = $this->Lookbooks->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbook', 'users'));
        $this->set('_serialize', ['lookbook']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lookbook id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lookbook = $this->Lookbooks->get($id);
        if ($this->Lookbooks->delete($lookbook)) {
            $this->Flash->success('The lookbook has been deleted.');
        } else {
            $this->Flash->error('The lookbook could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
