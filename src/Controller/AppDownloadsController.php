<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AppDownloads Controller
 *
 * @property \App\Model\Table\AppDownloadsTable $AppDownloads
 */
class AppDownloadsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('appDownloads', $this->paginate($this->AppDownloads));
        $this->set('_serialize', ['appDownloads']);
    }

    /**
     * View method
     *
     * @param string|null $id App Download id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appDownload = $this->AppDownloads->get($id, [
            'contain' => []
        ]);
        $this->set('appDownload', $appDownload);
        $this->set('_serialize', ['appDownload']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appDownload = $this->AppDownloads->newEntity();
        if ($this->request->is('post')) {
            $appDownload = $this->AppDownloads->patchEntity($appDownload, $this->request->data);
            if ($this->AppDownloads->save($appDownload)) {
                $this->Flash->success(__('The app download has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The app download could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('appDownload'));
        $this->set('_serialize', ['appDownload']);
    }

    /**
     * Edit method
     *
     * @param string|null $id App Download id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appDownload = $this->AppDownloads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appDownload = $this->AppDownloads->patchEntity($appDownload, $this->request->data);
            if ($this->AppDownloads->save($appDownload)) {
                $this->Flash->success(__('The app download has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The app download could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('appDownload'));
        $this->set('_serialize', ['appDownload']);
    }

    /**
     * Delete method
     *
     * @param string|null $id App Download id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appDownload = $this->AppDownloads->get($id);
        if ($this->AppDownloads->delete($appDownload)) {
            $this->Flash->success(__('The app download has been deleted.'));
        } else {
            $this->Flash->error(__('The app download could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
