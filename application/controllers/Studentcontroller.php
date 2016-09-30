<?php

class StudentController extends CI_Controller
{
	/*
	* initializes  object object of this class
	* 
	*/

	function  __construct()
	{
		parent::__construct();
		$this->load->model('StudentModel');
		$this->load->helper('url');
	}




	/* this method will load default view 
	*/
	public function index()
	{
		$this->load->view('add_student_form');
	
	}

	/*this method will load view for taking student information for insertion
	*/
	public function addStudentView()
	{

		$this->load->view('add_student_form');
		
	}

	/*this method takes student object and insert it into respective table
	* @param Student object
	* @return TRUE if successfully inseted student object in database
	*/
	public function addStudent($value='')
	{
		$data=array(
			"name"=>$this->input->post('name'),
			"address"=>$this->input->post('address')

			);

		$this->StudentModel->insert($data);

		$data['abc']=$this->Studentmodel->get();
		// print_r($data);
		$this->load->view('student_view',$data);

		
	}
	

	
	/*this method will load view for taking student information for updation
	*/
	public function updateStudentView()
	{
		$data=array(
			"name"=>$this->input->name,
			"address"=>$this->input->address
		);
		$this->StudentModel->update($this);
		
	}
	/*this method takes student object and update respective table row
	*@param Student object
	* @return TRUE if successfully updated student object in database
	*/
	public function updateStudent($value='')
	{
		
	}


	/*this method takes id of student object and delete it from database table
	* @param Student id
	* @return TRUE if successfully deleted student object in database
	*/
	public function deleteStudent($value='')
	{
	
	}

	public function listAll()
	{
		$data['abc']=$this->StudentModel->get();
		$this->load->view('student_view',$data);

		// print_r($data);
	}

public function testing()
{
	
	$this->load->library('Doctrine');


print_r($this->Doctrine->em);

}

}
//javascript ,jquery,angular js,php,laravel,codeigniter,concrete5,java,android,spring,