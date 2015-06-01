<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArticleStores Controller
 *
 * @property \App\Model\Table\ArticleStoresTable $ArticleStores
 */
class ArticleStoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Stores']
        ];
        $this->set('articleStores', $this->paginate($this->ArticleStores));
        $this->set('_serialize', ['articleStores']);
    }

    /**
     * View method
     *
     * @param string|null $id Article Store id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articleStore = $this->ArticleStores->get($id, [
            'contain' => ['Articles', 'Stores']
        ]);
        $this->set('articleStore', $articleStore);
        $this->set('_serialize', ['articleStore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articleStore = $this->ArticleStores->newEntity();
        if ($this->request->is('post')) {
            $articleStore = $this->ArticleStores->patchEntity($articleStore, $this->request->data);
            if ($this->ArticleStores->save($articleStore)) {
                $this->Flash->success('The article store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The article store could not be saved. Please, try again.');
            }
        }
        $articles = $this->ArticleStores->Articles->find('list', ['limit' => 200]);
        $stores = $this->ArticleStores->Stores->find('list', ['limit' => 200]);
        $this->set(compact('articleStore', 'articles', 'stores'));
        $this->set('_serialize', ['articleStore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Store id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articleStore = $this->ArticleStores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleStore = $this->ArticleStores->patchEntity($articleStore, $this->request->data);
            if ($this->ArticleStores->save($articleStore)) {
                $this->Flash->success('The article store has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The article store could not be saved. Please, try again.');
            }
        }
        $articles = $this->ArticleStores->Articles->find('list', ['limit' => 200]);
        $stores = $this->ArticleStores->Stores->find('list', ['limit' => 200]);
        $this->set(compact('articleStore', 'articles', 'stores'));
        $this->set('_serialize', ['articleStore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Store id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articleStore = $this->ArticleStores->get($id);
        if ($this->ArticleStores->delete($articleStore)) {
            $this->Flash->success('The article store has been deleted.');
        } else {
            $this->Flash->error('The article store could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
