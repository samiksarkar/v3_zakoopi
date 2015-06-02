<?php
namespace namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * ArticleHits Controller
 *
 * @property \App\Model\Table\ArticleHitsTable $ArticleHits
 */
class ArticleHitsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Users']
        ];
        $this->set('articleHits', $this->paginate($this->ArticleHits));
        $this->set('_serialize', ['articleHits']);
    }

    /**
     * View method
     *
     * @param string|null $id Article Hit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articleHit = $this->ArticleHits->get($id, [
            'contain' => ['Articles', 'Users']
        ]);
        $this->set('articleHit', $articleHit);
        $this->set('_serialize', ['articleHit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articleHit = $this->ArticleHits->newEntity();
        if ($this->request->is('post')) {
            $articleHit = $this->ArticleHits->patchEntity($articleHit, $this->request->data);
            if ($this->ArticleHits->save($articleHit)) {
                $this->Flash->success('The article hit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The article hit could not be saved. Please, try again.');
            }
        }
        $articles = $this->ArticleHits->Articles->find('list', ['limit' => 200]);
        $users = $this->ArticleHits->Users->find('list', ['limit' => 200]);
        $this->set(compact('articleHit', 'articles', 'users'));
        $this->set('_serialize', ['articleHit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Hit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articleHit = $this->ArticleHits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleHit = $this->ArticleHits->patchEntity($articleHit, $this->request->data);
            if ($this->ArticleHits->save($articleHit)) {
                $this->Flash->success('The article hit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The article hit could not be saved. Please, try again.');
            }
        }
        $articles = $this->ArticleHits->Articles->find('list', ['limit' => 200]);
        $users = $this->ArticleHits->Users->find('list', ['limit' => 200]);
        $this->set(compact('articleHit', 'articles', 'users'));
        $this->set('_serialize', ['articleHit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Hit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articleHit = $this->ArticleHits->get($id);
        if ($this->ArticleHits->delete($articleHit)) {
            $this->Flash->success('The article hit has been deleted.');
        } else {
            $this->Flash->error('The article hit could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
