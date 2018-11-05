<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userinfo Controller
 *
 * @property \App\Model\Table\UserinfoTable $Userinfo
 *
 * @method \App\Model\Entity\Userinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserinfoController extends AppController
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
        $userinfo = $this->paginate($this->Userinfo);

        $this->set(compact('userinfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userinfo = $this->Userinfo->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userinfo', $userinfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userinfo = $this->Userinfo->newEntity();
        if ($this->request->is('post')) {
            $userinfo = $this->Userinfo->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfo->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));

                 //以下リダイレクト先を指定するここ大事
                 return $this->redirect([
                    'controller' => 'users' , 'action' => 'view',$userinfo->user_id]);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $users = $this->Userinfo->Users->find('list', ['limit' => 200]);
        $this->set(compact('userinfo', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userinfo = $this->Userinfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userinfo = $this->Userinfo->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfo->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));
                
                //以下リダイレクト先を指定するここ大事
                return $this->redirect([
                    'controller' => 'users' , 'action' => 'view',$userinfo->user_id]);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $users = $this->Userinfo->Users->find('list', ['limit' => 200]);
        $this->set(compact('userinfo', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userinfo = $this->Userinfo->get($id);
        if ($this->Userinfo->delete($userinfo)) {
            $this->Flash->success(__('The userinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The userinfo could not be deleted. Please, try again.'));
        }

         //以下リダイレクト先を指定するここ大事
         return $this->redirect([
            'controller' => 'users' , 'action' => 'view',$userinfo->user_id]);
    }
}
