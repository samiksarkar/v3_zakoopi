<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Geocodes Controller
 *
 * @property \App\Model\Table\GeocodesTable $Geocodes
 */
class GeocodesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('geocodes', $this->paginate($this->Geocodes));
        $this->set('_serialize', ['geocodes']);
    }

    /**
     * View method
     *
     * @param string|null $id Geocode id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geocode = $this->Geocodes->get($id, [
            'contain' => []
        ]);
        $this->set('geocode', $geocode);
        $this->set('_serialize', ['geocode']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geocode = $this->Geocodes->newEntity();
        if ($this->request->is('post')) {
            $geocode = $this->Geocodes->patchEntity($geocode, $this->request->data);
            if ($this->Geocodes->save($geocode)) {
                $this->Flash->success('The geocode has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The geocode could not be saved. Please, try again.');
            }
        }
        $this->set(compact('geocode'));
        $this->set('_serialize', ['geocode']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geocode id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geocode = $this->Geocodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geocode = $this->Geocodes->patchEntity($geocode, $this->request->data);
            if ($this->Geocodes->save($geocode)) {
                $this->Flash->success('The geocode has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The geocode could not be saved. Please, try again.');
            }
        }
        $this->set(compact('geocode'));
        $this->set('_serialize', ['geocode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geocode id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geocode = $this->Geocodes->get($id);
        if ($this->Geocodes->delete($geocode)) {
            $this->Flash->success('The geocode has been deleted.');
        } else {
            $this->Flash->error('The geocode could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
