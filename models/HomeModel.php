<?php

class HomeModel extends CI_Model {

	public function getStudentsData($limit,$offset){
		$this->db->limit($limit,$offset);
		$q = $this->db->get('students');
		return $q->result();
	}
	public function addStudentsData($name, $salary, $gender, $hired_date){

		$data['name'] = $name;
		$data['salary'] = $salary;
		$data['gender'] = $gender;
		$data['hired_date'] = $hired_date;
		$q = $this->db->insert('students',$data);
		return $q;

	}
	public function delStudentDataById($id) {

		 $this->db->where('id',$id);
		 return $this->db->delete('students');

	}
	public function getStudentsDataById($studentId) {
		
		$this->db->where('id',$studentId);
		$q = $this->db->get('students');
		return $q->row();
	}

	public function getTotalRows(){

		$q = $this->db->get('students');
		return $q->num_rows();
	}
 	
 	public function UpdateStudentsDataById($studentsId, $name, $salary, $gender, $hired_date) {

 		$data['name'] = $name;
		$data['salary'] = $salary;
		$data['gender'] = $gender;
		$data['hired_date'] = $hired_date;
		$this->db->where('id',$studentsId);
		return $this->db->update('students',$data);
 	}
}

?>