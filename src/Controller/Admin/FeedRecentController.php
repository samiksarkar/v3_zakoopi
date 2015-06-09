<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * FeedRecent Controller
 *
 * @property \App\Model\Table\FeedRecentTable $FeedRecent
 */
class FeedRecentController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('feedRecent', $this->paginate($this->FeedRecent));
        $this->set('_serialize', ['feedRecent']);
    }

    /**
     * View method
     *
     * @param string|null $id Feed Recent id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feedRecent = $this->FeedRecent->get($id, [
            'contain' => []
        ]);
        $this->set('feedRecent', $feedRecent);
        $this->set('_serialize', ['feedRecent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feedRecent = $this->FeedRecent->newEntity();
        if ($this->request->is('post')) {
            $feedRecent = $this->FeedRecent->patchEntity($feedRecent, $this->request->data);
            if ($this->FeedRecent->save($feedRecent)) {
                $this->Flash->success(__('The feed recent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed recent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feedRecent'));
        $this->set('_serialize', ['feedRecent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feed Recent id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedRecent = $this->FeedRecent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedRecent = $this->FeedRecent->patchEntity($feedRecent, $this->request->data);
            if ($this->FeedRecent->save($feedRecent)) {
                $this->Flash->success(__('The feed recent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed recent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feedRecent'));
        $this->set('_serialize', ['feedRecent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feed Recent id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedRecent = $this->FeedRecent->get($id);
        if ($this->FeedRecent->delete($feedRecent)) {
            $this->Flash->success(__('The feed recent has been deleted.'));
        } else {
            $this->Flash->error(__('The feed recent could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
