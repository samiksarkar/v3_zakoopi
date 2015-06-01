<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ArticlesSorttrendings Controller
 *
 * @property \App\Model\Table\ArticlesSorttrendingsTable $ArticlesSorttrendings
 */
class ArticlesSorttrendingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Articles']
        ];
        $this->set('articlesSorttrendings', $this->paginate($this->ArticlesSorttrendings));
        $this->set('_serialize', ['articlesSorttrendings']);
    }

    /**
     * View method
     *
     * @param string|null $id Articles Sorttrending id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlesSorttrending = $this->ArticlesSorttrendings->get($id, [
            'contain' => ['Cities', 'Articles']
        ]);
        $this->set('articlesSorttrending', $articlesSorttrending);
        $this->set('_serialize', ['articlesSorttrending']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlesSorttrending = $this->ArticlesSorttrendings->newEntity();
        if ($this->request->is('post')) {
            $articlesSorttrending = $this->ArticlesSorttrendings->patchEntity($articlesSorttrending, $this->request->data);
            if ($this->ArticlesSorttrendings->save($articlesSorttrending)) {
                $this->Flash->success('The articles sorttrending has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The articles sorttrending could not be saved. Please, try again.');
            }
        }
        $cities = $this->ArticlesSorttrendings->Cities->find('list', ['limit' => 200]);
        $articles = $this->ArticlesSorttrendings->Articles->find('list', ['limit' => 200]);
        $this->set(compact('articlesSorttrending', 'cities', 'articles'));
        $this->set('_serialize', ['articlesSorttrending']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Articles Sorttrending id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlesSorttrending = $this->ArticlesSorttrendings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlesSorttrending = $this->ArticlesSorttrendings->patchEntity($articlesSorttrending, $this->request->data);
            if ($this->ArticlesSorttrendings->save($articlesSorttrending)) {
                $this->Flash->success('The articles sorttrending has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The articles sorttrending could not be saved. Please, try again.');
            }
        }
        $cities = $this->ArticlesSorttrendings->Cities->find('list', ['limit' => 200]);
        $articles = $this->ArticlesSorttrendings->Articles->find('list', ['limit' => 200]);
        $this->set(compact('articlesSorttrending', 'cities', 'articles'));
        $this->set('_serialize', ['articlesSorttrending']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Articles Sorttrending id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlesSorttrending = $this->ArticlesSorttrendings->get($id);
        if ($this->ArticlesSorttrendings->delete($articlesSorttrending)) {
            $this->Flash->success('The articles sorttrending has been deleted.');
        } else {
            $this->Flash->error('The articles sorttrending could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
