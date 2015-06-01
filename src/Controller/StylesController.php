<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Styles Controller
 *
 * @property \App\Model\Table\StylesTable $Styles
 */
class StylesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('styles', $this->paginate($this->Styles));
        $this->set('_serialize', ['styles']);
    }

    /**
     * View method
     *
     * @param string|null $id Style id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $style = $this->Styles->get($id, [
            'contain' => ['StoreOfferings']
        ]);
        $this->set('style', $style);
        $this->set('_serialize', ['style']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $style = $this->Styles->newEntity();
        if ($this->request->is('post')) {
            $style = $this->Styles->patchEntity($style, $this->request->data);
            if ($this->Styles->save($style)) {
                $this->Flash->success('The style has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The style could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->Styles->StoreOfferings->find('list', ['limit' => 200]);
        $this->set(compact('style', 'storeOfferings'));
        $this->set('_serialize', ['style']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Style id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $style = $this->Styles->get($id, [
            'contain' => ['StoreOfferings']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $style = $this->Styles->patchEntity($style, $this->request->data);
            if ($this->Styles->save($style)) {
                $this->Flash->success('The style has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The style could not be saved. Please, try again.');
            }
        }
        $storeOfferings = $this->Styles->StoreOfferings->find('list', ['limit' => 200]);
        $this->set(compact('style', 'storeOfferings'));
        $this->set('_serialize', ['style']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Style id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $style = $this->Styles->get($id);
        if ($this->Styles->delete($style)) {
            $this->Flash->success('The style has been deleted.');
        } else {
            $this->Flash->error('The style could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
