<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Lookbookcomments Controller
 *
 * @property \App\Model\Table\LookbookcommentsTable $Lookbookcomments
 */
class LookbookcommentsController extends AppController
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
        $this->set('lookbookcomments', $this->paginate($this->Lookbookcomments));
        $this->set('_serialize', ['lookbookcomments']);
    }

    /**
     * View method
     *
     * @param string|null $id Lookbookcomment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lookbookcomment = $this->Lookbookcomments->get($id, [
            'contain' => ['Lookbooks', 'Users']
        ]);
        $this->set('lookbookcomment', $lookbookcomment);
        $this->set('_serialize', ['lookbookcomment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lookbookcomment = $this->Lookbookcomments->newEntity();
        if ($this->request->is('post')) {
            $lookbookcomment = $this->Lookbookcomments->patchEntity($lookbookcomment, $this->request->data);
            if ($this->Lookbookcomments->save($lookbookcomment)) {
                $this->Flash->success('The lookbookcomment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbookcomment could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Lookbookcomments->Lookbooks->find('list', ['limit' => 200]);
        $users = $this->Lookbookcomments->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbookcomment', 'lookbooks', 'users'));
        $this->set('_serialize', ['lookbookcomment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lookbookcomment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lookbookcomment = $this->Lookbookcomments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lookbookcomment = $this->Lookbookcomments->patchEntity($lookbookcomment, $this->request->data);
            if ($this->Lookbookcomments->save($lookbookcomment)) {
                $this->Flash->success('The lookbookcomment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lookbookcomment could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Lookbookcomments->Lookbooks->find('list', ['limit' => 200]);
        $users = $this->Lookbookcomments->Users->find('list', ['limit' => 200]);
        $this->set(compact('lookbookcomment', 'lookbooks', 'users'));
        $this->set('_serialize', ['lookbookcomment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lookbookcomment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lookbookcomment = $this->Lookbookcomments->get($id);
        if ($this->Lookbookcomments->delete($lookbookcomment)) {
            $this->Flash->success('The lookbookcomment has been deleted.');
        } else {
            $this->Flash->error('The lookbookcomment could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
