<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Occasions Controller
 *
 * @property \App\Model\Table\OccasionsTable $Occasions
 */
class OccasionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('occasions', $this->paginate($this->Occasions));
        $this->set('_serialize', ['occasions']);
    }

    /**
     * View method
     *
     * @param string|null $id Occasion id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occasion = $this->Occasions->get($id, [
            'contain' => ['Offerings']
        ]);
        $this->set('occasion', $occasion);
        $this->set('_serialize', ['occasion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occasion = $this->Occasions->newEntity();
        if ($this->request->is('post')) {
            $occasion = $this->Occasions->patchEntity($occasion, $this->request->data);
            if ($this->Occasions->save($occasion)) {
                $this->Flash->success('The occasion has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occasion could not be saved. Please, try again.');
            }
        }
        $offerings = $this->Occasions->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('occasion', 'offerings'));
        $this->set('_serialize', ['occasion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occasion id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occasion = $this->Occasions->get($id, [
            'contain' => ['Offerings']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occasion = $this->Occasions->patchEntity($occasion, $this->request->data);
            if ($this->Occasions->save($occasion)) {
                $this->Flash->success('The occasion has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occasion could not be saved. Please, try again.');
            }
        }
        $offerings = $this->Occasions->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('occasion', 'offerings'));
        $this->set('_serialize', ['occasion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occasion id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occasion = $this->Occasions->get($id);
        if ($this->Occasions->delete($occasion)) {
            $this->Flash->success('The occasion has been deleted.');
        } else {
            $this->Flash->error('The occasion could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
