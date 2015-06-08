<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArticleLikes Controller
 *
 * @property \App\Model\Table\ArticleLikesTable $ArticleLikes
 */
class ArticleLikesController extends AppController
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
        $this->set('articleLikes', $this->paginate($this->ArticleLikes));
        $this->set('_serialize', ['articleLikes']);
    }

    /**
     * View method
     *
     * @param string|null $id Article Like id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articleLike = $this->ArticleLikes->get($id, [
            'contain' => ['Articles', 'Users']
        ]);
        $this->set('articleLike', $articleLike);
        $this->set('_serialize', ['articleLike']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articleLike = $this->ArticleLikes->newEntity();
        if ($this->request->is('post')) {
            $articleLike = $this->ArticleLikes->patchEntity($articleLike, $this->request->data);
            if ($this->ArticleLikes->save($articleLike)) {
                $this->Flash->success(__('The article like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article like could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticleLikes->Articles->find('list', ['limit' => 200]);
        $users = $this->ArticleLikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('articleLike', 'articles', 'users'));
        $this->set('_serialize', ['articleLike']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Like id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articleLike = $this->ArticleLikes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleLike = $this->ArticleLikes->patchEntity($articleLike, $this->request->data);
            if ($this->ArticleLikes->save($articleLike)) {
                $this->Flash->success(__('The article like has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article like could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticleLikes->Articles->find('list', ['limit' => 200]);
        $users = $this->ArticleLikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('articleLike', 'articles', 'users'));
        $this->set('_serialize', ['articleLike']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Like id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articleLike = $this->ArticleLikes->get($id);
        if ($this->ArticleLikes->delete($articleLike)) {
            $this->Flash->success(__('The article like has been deleted.'));
        } else {
            $this->Flash->error(__('The article like could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
