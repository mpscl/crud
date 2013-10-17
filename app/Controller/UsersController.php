<?php

App::uses('Controller', 'Controller');


class UsersController extends AppController {
    public $helpers = array('Html','Form');

    function index() {
        $this->set('users', $this->User->find('all'));
    }

    public function view($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
    }

    public function add(){
    	if ($this->request->is('post')){
    		if($this->User->save($this->request->data)){
    			$this->Session->setFlash('Tu Cuenta fue creada.');
    			$this->redirect(array('action' => 'index'));
    		}
    	}
    }

    public function edit($id = null) {
    $this->User->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->User->read();
    } else {
        if ($this->User->save($this->request->data)) {
            $this->Session->setFlash('Tu cuenta ha sido actualizada.');
            $this->redirect(array('action' => 'index'));
        	}
    	}
	}

	public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->User->delete($id)) {
        $this->Session->setFlash('La cuenta con id: ' . $id . ' fue borrada.');
        $this->redirect(array('action' => 'index'));
    	}
	}    

}
