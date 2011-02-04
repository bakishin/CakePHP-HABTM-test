<?php
class DataInstituteCodesController extends AppController {

	var $name = 'DataInstituteCodes';

	function index() {
		$this->DataInstituteCode->recursive = 0;
		$this->set('dataInstituteCodes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid data institute code', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dataInstituteCode', $this->DataInstituteCode->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
/**
$inputData = $this->data;
var_dump($inputData);
exit;
**/
			$this->DataInstituteCode->create();
			if ($this->DataInstituteCode->save($this->data)) {
				$this->Session->setFlash(__('The data institute code has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data institute code could not be saved. Please, try again.', true));
			}
		}
		$dataInstituteGroups = $this->DataInstituteCode->DataInstituteGroup->find('list');
		$this->set(compact('dataInstituteGroups'));

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid data institute code', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DataInstituteCode->save($this->data)) {
				$this->Session->setFlash(__('The data institute code has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data institute code could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DataInstituteCode->read(null, $id);
		}
		$dataInstituteGroups = $this->DataInstituteCode->DataInstituteGroup->find('list');
		$this->set(compact('dataInstituteGroups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for data institute code', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DataInstituteCode->delete($id)) {
			$this->Session->setFlash(__('Data institute code deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Data institute code was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>