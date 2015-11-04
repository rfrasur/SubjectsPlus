<?php
/**
 *   @file GuideList.php
 *   @brief Return a list of subjects guides as an array and json
 *
 *   @author little9 (Jamie Little)
 *   @date Auguest 2015
 */

namespace SubjectsPlus\Control\Guide;

use SubjectsPlus\Control\Interfaces\OutputInterface;
use SubjectsPlus\Control\Querier;

class GuideList implements OutputInterface {
	private $db;
	private $_guide_list;
	
	public function __construct(Querier $db) {
		$this->db = $db;
		$connection = $this->db->getConnection();
		$statement = $connection->prepare("SELECT subject_id, subject, active FROM subject");
		$statement->execute();
		$this->_guide_list = $statement->fetchAll();
	}

	public function toArray() {
		// TODO: Auto-generated method stub
		return $this->_guide_list;
	}

	public function toJSON() {
		// TODO: Auto-generated method stub
		return json_encode((object) $this->_guide_list);
	}

}