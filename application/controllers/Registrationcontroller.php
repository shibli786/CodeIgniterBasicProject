<?php


class RegistrationController extends CI_Controller
{

	protected $isStaff=false;
	protected $isStudent=false;

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		
	}

	public function getStudentRegistration()
	{
		$this->load->view('add_student_form');
	}

	public function getSaffRegistration()
	{
		$this->load->view('registration/staff_registration_form');
	}

	public function postStudentRegistration()
	{
		print_r($this->input->post('name'));
		$this->isStudent=true;
		$this->initializeValidator();
		if($this->validate()){
			$this->load->model('StudentModel');
			$this->StudentModel->register();
		}


		
	}

	public function postSaffRegistration()
	{
		$this->isStaff=true;
		$this->initializeValidator();

		if($this->validate()){
		
			$this->load->model('StaffModel');
			$this->StaffModel->register();


			

		}


	}



	public function validate()
	{
		$this->setValidationRule();
		
		if($this->form_validation->run())
		{
			return true;

		}
		return false;
	}


	public function setValidationRule()
	{
		$this->form_validation->set_rules(
			'name','Name','required');

		/*	//common validation
		$this->form_validation->set_rules(
			'username', 'Username', 'required'
			);
		$this->form_validation->set_rules(
			'name','Name','required');
		$this->form_validation->set_rules(
			'dob','Date of Birth','required');

		$this->form_validation->set_rules(
			'password', 'Password', 'required|min_length[5]|max_length[15'
			);
		$this->form_validation->set_rules(
			'passconf', 'Password Confirmation', 'required'
			);
		$this->form_validation->set_rules(
			'email', 'Email', 'required|valid_email'
			);
		$this->form_validation->set->set_rules(
			'pasconfirm','Password','required|matches[password]|'
*/
		//	);
		//student specific validation
		if($isStudent){

		}
		// staff specific validation
		else {


		}


		
	}


	public function initializeValidator()
	{
		$this->load->library('form_validation');
	}

	
	public function isStaff()
	{
		if($isStaff){
			return true;
		}
		return false;
	}

	public function isStudent()
	{
		
		if($isStudent){
			return true;
		}
		return false;
	}




	


	
}