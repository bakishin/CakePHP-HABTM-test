<?php
/* DataInstituteCodes Test cases generated on: 2011-02-04 14:30:40 : 1296797440*/
App::import('Controller', 'DataInstituteCodes');

class TestDataInstituteCodesController extends DataInstituteCodesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DataInstituteCodesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.data_institute_code');

	function startTest() {
		$this->DataInstituteCodes =& new TestDataInstituteCodesController();
		$this->DataInstituteCodes->constructClasses();
	}

	function endTest() {
		unset($this->DataInstituteCodes);
		ClassRegistry::flush();
	}

}
?>