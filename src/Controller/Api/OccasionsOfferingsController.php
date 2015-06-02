<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * OccasionsOfferings Controller
 *
 * @property \App\Model\Table\OccasionsOfferingsTable $OccasionsOfferings
 */
class OccasionsOfferingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Occasions', 'Offerings']
        ];
        $this->set('occasionsOfferings', $this->paginate($this->OccasionsOfferings));
        $this->set('_serialize', ['occasionsOfferings']);
    }

    /**
     * View method
     *
     * @param string|null $id Occasions Offering id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occasionsOffering = $this->OccasionsOfferings->get($id, [
            'contain' => ['Occasions', 'Offerings']
        ]);
        $this->set('occasionsOffering', $occasionsOffering);
        $this->set('_serialize', ['occasionsOffering']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occasionsOffering = $this->OccasionsOfferings->newEntity();
        if ($this->request->is('post')) {
            $occasionsOffering = $this->OccasionsOfferings->patchEntity($occasionsOffering, $this->request->data);
            if ($this->OccasionsOfferings->save($occasionsOffering)) {
                $this->Flash->success('The occasions offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occasions offering could not be saved. Please, try again.');
            }
        }
        $occasions = $this->OccasionsOfferings->Occasions->find('list', ['limit' => 200]);
        $offerings = $this->OccasionsOfferings->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('occasionsOffering', 'occasions', 'offerings'));
        $this->set('_serialize', ['occasionsOffering']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occasions Offering id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occasionsOffering = $this->OccasionsOfferings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occasionsOffering = $this->OccasionsOfferings->patchEntity($occasionsOffering, $this->request->data);
            if ($this->OccasionsOfferings->save($occasionsOffering)) {
                $this->Flash->success('The occasions offering has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occasions offering could not be saved. Please, try again.');
            }
        }
        $occasions = $this->OccasionsOfferings->Occasions->find('list', ['limit' => 200]);
        $offerings = $this->OccasionsOfferings->Offerings->find('list', ['limit' => 200]);
        $this->set(compact('occasionsOffering', 'occasions', 'offerings'));
        $this->set('_serialize', ['occasionsOffering']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occasions Offering id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occasionsOffering = $this->OccasionsOfferings->get($id);
        if ($this->OccasionsOfferings->delete($occasionsOffering)) {
            $this->Flash->success('The occasions offering has been deleted.');
        } else {
            $this->Flash->error('The occasions offering could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
