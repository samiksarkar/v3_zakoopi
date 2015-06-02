<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Synonyms Controller
 *
 * @property \App\Model\Table\SynonymsTable $Synonyms
 */
class SynonymsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities']
        ];
        $this->set('synonyms', $this->paginate($this->Synonyms));
        $this->set('_serialize', ['synonyms']);
    }

    /**
     * View method
     *
     * @param string|null $id Synonym id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $synonym = $this->Synonyms->get($id, [
            'contain' => ['Cities']
        ]);
        $this->set('synonym', $synonym);
        $this->set('_serialize', ['synonym']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $synonym = $this->Synonyms->newEntity();
        if ($this->request->is('post')) {
            $synonym = $this->Synonyms->patchEntity($synonym, $this->request->data);
            if ($this->Synonyms->save($synonym)) {
                $this->Flash->success('The synonym has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The synonym could not be saved. Please, try again.');
            }
        }
        $cities = $this->Synonyms->Cities->find('list', ['limit' => 200]);
        $this->set(compact('synonym', 'cities'));
        $this->set('_serialize', ['synonym']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Synonym id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $synonym = $this->Synonyms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $synonym = $this->Synonyms->patchEntity($synonym, $this->request->data);
            if ($this->Synonyms->save($synonym)) {
                $this->Flash->success('The synonym has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The synonym could not be saved. Please, try again.');
            }
        }
        $cities = $this->Synonyms->Cities->find('list', ['limit' => 200]);
        $this->set(compact('synonym', 'cities'));
        $this->set('_serialize', ['synonym']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Synonym id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $synonym = $this->Synonyms->get($id);
        if ($this->Synonyms->delete($synonym)) {
            $this->Flash->success('The synonym has been deleted.');
        } else {
            $this->Flash->error('The synonym could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
