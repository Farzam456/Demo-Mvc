<?php

class Home extends CI_Controller {

	public function __construct() {

		parent :: __construct();

		$this->load->model('HomeModel');
	}

	public function index(){
		$data['title'] = "Codeingiter Simple Crud Application";
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/index');
		$config['per_page'] = 3;
		$config['total_rows'] = $this->HomeModel->getTotalRows();

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul";
		$config['next_tag_open'] = " <li class='page-item disabled'>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = " <li class='page-item'>";
		$config['prev_tag_close'] = "</li>";
		$config['num_tag_open'] = " <li class='page-item'>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>";
		$config['cur_tag_close'] = "<span class='sr-only'>(current)</span></a></li>";
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);

		$data['students'] = $this->HomeModel->getStudentsData($config['per_page'],$this->uri->segment(3));
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('home',$data);
	}
	public function create(){
		$data['title'] = "Add Students Data";
		$this->load->view('create-students-data',$data);

	}
	public function userValidation(){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('hired_date', 'HiredDate', 'required');
		$this->form_validation->set_error_delimiters('<div class = "text text-danger">','</div>');
		if($this->form_validation->run()) {

			$name = $this->input->post('name');
			$salary = $this->input->post('salary');
			$gender = $this->input->post('gender');
			$hired_date =$this->input->post('hired_date');
			
			$studentsData = $this->HomeModel->addStudentsData($name,$salary,$gender,$hired_date);
			if($studentsData){

				$this->session->set_flashdata('success','Record inserted successfully');
				redirect('home');
			}
			else
			{
				$this->session->set_flashdata('failed','Something went Wrong?');
				redirect('home/create');
			}
		}
		else {
			$data['title'] = "Add Students Data";
		$this->load->view('create-students-data',$data);
		}
	}

	public function delete($id){

		
		$deleteData = $this->HomeModel->delStudentDataById($id);

		if($deleteData) {

			$this->session->set_flashdata('success','Record Deleted successfully');
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('failed','Your Data not Deleted');
				redirect('home');
		}


	}
	public function edit($id){
		$data['title'] = "Edit Students Data";
		$data['student'] = $this->HomeModel->getStudentsDataById($id);
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('hired_date', 'hired_date', 'required');
		$this->form_validation->set_error_delimiters('<div class = "text text-danger">','</div>');
		if($this->form_validation->run()) {

			$name = $this->input->post('name');
			$salary = $this->input->post('salary');
			$gender = $this->input->post('gender');
			$hired_date =$this->input->post('hired_date');
			
			$UpdateData = $this->HomeModel->UpdateStudentsDataById($id,$name,$salary,$gender,$hired_date);
			if($UpdateData){

				$this->session->set_flashdata('success','Record updated successfully');
				redirect('home');
			}
			else
			{
				$this->session->set_flashdata('failed','Your data not updated');
				redirect('home/edit');
			}
		}
		else {
			$data['title'] = "Update Students Data";
		$this->load->view('edit-student',$data);
		}
		
	}
}


?>