<?php
/* DataInstituteGroups Test cases generated on: 2011-02-04 14:55:49 : 1296798949*/
App::import('Controller', 'DataInstituteGroups');

class TestDataInstituteGroupsController extends DataInstituteGroupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DataInstituteGroupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.data_institute_group');

	function startTest() {
		$this->DataInstituteGroups =& new TestDataInstituteGroupsController();
		$this->DataInstituteGroups->constructClasses();
	}

	function endTest() {
		unset($this->DataInstituteGroups);
		ClassRegistry::flush();
	}

}
?>