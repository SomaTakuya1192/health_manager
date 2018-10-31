<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userweight Controller
 *
 * @property \App\Model\Table\UserweightTable $Userweight
 *
 * @method \App\Model\Entity\Userweight[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserweightController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userweight = $this->paginate($this->Userweight);

        $this->set(compact('userweight'));
    }

    /**
     * View method
     *
     * @param string|null $id Userweight id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userweight = $this->Userweight->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userweight', $userweight);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userweight = $this->Userweight->newEntity();
        if ($this->request->is('post')) {
            $userweight = $this->Userweight->patchEntity($userweight, $this->request->getData());
            if ($this->Userweight->save($userweight)) {
                $this->Flash->success(__('The userweight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userweight could not be saved. Please, try again.'));
        }
        $users = $this->Userweight->Users->find('list', ['limit' => 200]);
        $this->set(compact('userweight', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userweight id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userweight = $this->Userweight->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userweight = $this->Userweight->patchEntity($userweight, $this->request->getData());
            if ($this->Userweight->save($userweight)) {
                $this->Flash->success(__('The userweight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userweight could not be saved. Please, try again.'));
        }
        $users = $this->Userweight->Users->find('list', ['limit' => 200]);
        $this->set(compact('userweight', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userweight id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userweight = $this->Userweight->get($id);
        if ($this->Userweight->delete($userweight)) {
            $this->Flash->success(__('The userweight has been deleted.'));
        } else {
            $this->Flash->error(__('The userweight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
