<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * FeedPopular Controller
 *
 * @property \App\Model\Table\FeedPopularTable $FeedPopular
 */
class FeedPopularController extends AppController
{

    public $paginate = [
        'limit' => 25,
        'order' => [
            'FeedPopular.order' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'order' => [
                'FeedPopular.order' => 'desc',
                'limit' => 1100000
            ]
        ];
        $this->set('feedPopular', $this->paginate($this->FeedPopular));
        $this->set('_serialize', ['feedPopular']);
    }

    /**
     * View method
     *
     * @param string|null $id Feed Popular id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feedPopular = $this->FeedPopular->get($id, [
            'contain' => []
        ]);
        $this->set('feedPopular', $feedPopular);
        $this->set('_serialize', ['feedPopular']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feedPopular = $this->FeedPopular->newEntity();
        if ($this->request->is('post')) {
            $feedPopular = $this->FeedPopular->patchEntity($feedPopular, $this->request->data);
            if ($this->FeedPopular->save($feedPopular)) {
                $this->Flash->success(__('The feed popular has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed popular could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feedPopular'));
        $this->set('_serialize', ['feedPopular']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feed Popular id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedPopular = $this->FeedPopular->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedPopular = $this->FeedPopular->patchEntity($feedPopular, $this->request->data);
            if ($this->FeedPopular->save($feedPopular)) {
                $this->Flash->success(__('The feed popular has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed popular could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feedPopular'));
        $this->set('_serialize', ['feedPopular']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feed Popular id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedPopular = $this->FeedPopular->get($id);
        if ($this->FeedPopular->delete($feedPopular)) {
            $this->Flash->success(__('The feed popular has been deleted.'));
        } else {
            $this->Flash->error(__('The feed popular could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
