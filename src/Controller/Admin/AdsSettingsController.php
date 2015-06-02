<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * AdsSettings Controller
 *
 * @property \App\Model\Table\AdsSettingsTable $AdsSettings
 */
class AdsSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('adsSettings', $this->paginate($this->AdsSettings));
        $this->set('_serialize', ['adsSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Ads Setting id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adsSetting = $this->AdsSettings->get($id, [
            'contain' => []
        ]);
        $this->set('adsSetting', $adsSetting);
        $this->set('_serialize', ['adsSetting']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adsSetting = $this->AdsSettings->newEntity();
        if ($this->request->is('post')) {
            $adsSetting = $this->AdsSettings->patchEntity($adsSetting, $this->request->data);
            if ($this->AdsSettings->save($adsSetting)) {
                $this->Flash->success('The ads setting has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ads setting could not be saved. Please, try again.');
            }
        }
        $this->set(compact('adsSetting'));
        $this->set('_serialize', ['adsSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ads Setting id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adsSetting = $this->AdsSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adsSetting = $this->AdsSettings->patchEntity($adsSetting, $this->request->data);
            if ($this->AdsSettings->save($adsSetting)) {
                $this->Flash->success('The ads setting has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ads setting could not be saved. Please, try again.');
            }
        }
        $this->set(compact('adsSetting'));
        $this->set('_serialize', ['adsSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ads Setting id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adsSetting = $this->AdsSettings->get($id);
        if ($this->AdsSettings->delete($adsSetting)) {
            $this->Flash->success('The ads setting has been deleted.');
        } else {
            $this->Flash->error('The ads setting could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
