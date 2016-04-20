<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Affiliations Controller
 *
 * @property \App\Model\Table\AffiliationsTable $Affiliations
 */
class AffiliationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $affiliations = $this->paginate($this->Affiliations);

        $this->set(compact('affiliations'));
        $this->set('_serialize', ['affiliations']);
    }

    /**
     * View method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affiliation = $this->Affiliations->get($id, [
            'contain' => ['Organizations']
        ]);

        $this->set('affiliation', $affiliation);
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affiliation = $this->Affiliations->newEntity();
        if ($this->request->is('post')) {
            $affiliation = $this->Affiliations->patchEntity($affiliation, $this->request->data);
            if ($this->Affiliations->save($affiliation)) {
                $this->Flash->success(__('The affiliation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The affiliation could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Affiliations->Organizations->find('list', ['limit' => 200]);
        $this->set(compact('affiliation', 'organizations'));
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affiliation = $this->Affiliations->get($id, [
            'contain' => ['Organizations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affiliation = $this->Affiliations->patchEntity($affiliation, $this->request->data);
            if ($this->Affiliations->save($affiliation)) {
                $this->Flash->success(__('The affiliation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The affiliation could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Affiliations->Organizations->find('list', ['limit' => 200]);
        $this->set(compact('affiliation', 'organizations'));
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affiliation = $this->Affiliations->get($id);
        if ($this->Affiliations->delete($affiliation)) {
            $this->Flash->success(__('The affiliation has been deleted.'));
        } else {
            $this->Flash->error(__('The affiliation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
