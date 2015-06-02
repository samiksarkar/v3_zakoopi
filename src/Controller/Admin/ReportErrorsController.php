<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * ReportErrors Controller
 *
 * @property \App\Model\Table\ReportErrorsTable $ReportErrors
 */
class ReportErrorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Users']
        ];
        $this->set('reportErrors', $this->paginate($this->ReportErrors));
        $this->set('_serialize', ['reportErrors']);
    }

    /**
     * View method
     *
     * @param string|null $id Report Error id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportError = $this->ReportErrors->get($id, [
            'contain' => ['Stores', 'Users']
        ]);
        $this->set('reportError', $reportError);
        $this->set('_serialize', ['reportError']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportError = $this->ReportErrors->newEntity();
        if ($this->request->is('post')) {
            $reportError = $this->ReportErrors->patchEntity($reportError, $this->request->data);
            if ($this->ReportErrors->save($reportError)) {
                $this->Flash->success('The report error has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The report error could not be saved. Please, try again.');
            }
        }
        $stores = $this->ReportErrors->Stores->find('list', ['limit' => 200]);
        $users = $this->ReportErrors->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportError', 'stores', 'users'));
        $this->set('_serialize', ['reportError']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Error id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportError = $this->ReportErrors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportError = $this->ReportErrors->patchEntity($reportError, $this->request->data);
            if ($this->ReportErrors->save($reportError)) {
                $this->Flash->success('The report error has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The report error could not be saved. Please, try again.');
            }
        }
        $stores = $this->ReportErrors->Stores->find('list', ['limit' => 200]);
        $users = $this->ReportErrors->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportError', 'stores', 'users'));
        $this->set('_serialize', ['reportError']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Error id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportError = $this->ReportErrors->get($id);
        if ($this->ReportErrors->delete($reportError)) {
            $this->Flash->success('The report error has been deleted.');
        } else {
            $this->Flash->error('The report error could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
