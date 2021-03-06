<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Project->create();
			$this->Project->save($this->request->data);
            $this->redirect(array('action' => 'index'));
		}
		$keywords = $this->Project->Keyword->find('list');
		$actors = $this->Project->Actor->find('list');
		$this->set(compact('keywords', 'actors'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
            $this->Project->save($this->request->data);
			$this->redirect(array('action' => 'index'));
		} else {
			$this->request->data = $this->Project->read(null, $id);
		}
		$keywords = $this->Project->Keyword->find('list');
		$actors = $this->Project->Actor->find('list');
		$this->set(compact('keywords', 'actors'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->Project->delete();
        $this->redirect(array('action' => 'index'));
	}
}
