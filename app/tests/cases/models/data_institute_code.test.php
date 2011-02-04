<?php
/* DataInstituteCode Test cases generated on: 2011-02-04 16:36:44 : 1296805004*/
App::import('Model', 'DataInstituteCode');

class DataInstituteCodeTestCase extends CakeTestCase {
	var $fixtures = array('app.data_institute_code', 'app.data_institute_group', 'app.data_institute_codes_data_institute_group');

	function startTest() {
		$this->DataInstituteCode =& ClassRegistry::init('DataInstituteCode');
	}

	function endTest() {
		unset($this->DataInstituteCode);
		ClassRegistry::flush();
	}

}
?>