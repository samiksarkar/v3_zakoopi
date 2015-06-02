<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Cards Controller
 *
 * @property \App\Model\Table\CardsTable $Cards
 */
class CardsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lookbooks']
        ];
        $this->set('cards', $this->paginate($this->Cards));
        $this->set('_serialize', ['cards']);
    }

    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => ['Lookbooks']
        ]);
        $this->set('card', $card);
        $this->set('_serialize', ['card']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $card = $this->Cards->newEntity();
        if ($this->request->is('post')) {
            $card = $this->Cards->patchEntity($card, $this->request->data);
            if ($this->Cards->save($card)) {
                $this->Flash->success('The card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The card could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Cards->Lookbooks->find('list', ['limit' => 200]);
        $this->set(compact('card', 'lookbooks'));
        $this->set('_serialize', ['card']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Cards->patchEntity($card, $this->request->data);
            if ($this->Cards->save($card)) {
                $this->Flash->success('The card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The card could not be saved. Please, try again.');
            }
        }
        $lookbooks = $this->Cards->Lookbooks->find('list', ['limit' => 200]);
        $this->set(compact('card', 'lookbooks'));
        $this->set('_serialize', ['card']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $card = $this->Cards->get($id);
        if ($this->Cards->delete($card)) {
            $this->Flash->success('The card has been deleted.');
        } else {
            $this->Flash->error('The card could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
