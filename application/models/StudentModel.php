<?php
use Application\Migration;

/**this calss  interacts with database
*  this class will represent Model of Student 
* 
*/
class StudentModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	
	}


	/*this method takes student object and insert it into respective table
	* @param Student object
	* @return TRUE if successfully inseted student object in database
	*/
	public function insert($student)
	{

		print_r("insert called");
		/*$this->load->database();
		$this->db->insert("students",$student);*/

		
	}
	
	/*this method takes student object and update respective table row
	*@param Student object
	* @return TRUE if successfully updated student object in database
	*/
	public function update($student)
	{
		$this->db->update($student);
		
	}

	/*this method takes id of student object and delete it from database table
	* @param Student id
	* @return TRUE if successfully deleted student object in database
	*/
	public function delete($id)
	{
	
	}


	public function get()
	{
		$this->load->database();
		$query=$this->db->get('students');
		$data=$query->result();
		return $data;
	}


	public function getById()
	{
		$this->load->database();
		$query=$this->db->get('students');
		$data=$query->result();
		return $data;
	}

	public function method($value='')
	{
		print_r($value);
	}


	public function register()
	{
		print_r("called");
		print_r($this->input->post('name'));

		$student=array(
			'name'=>$this->input->post('name'),
			'dob'=>$this->input->post('dob'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'previous_college'=>$this->input->post('previous_college'),
			'address'=>$this->input->post('address')
			);

			if(!istableExists(StudentMigrationTable::$tableName)){
				StudentMigrationTable::up()
			}
			$this->StudentModel->insert($student);
	}

	public function istableExists($tableName)
	{
		if($this->db->table_exists($tableName){
			return true;
		}
		return false;
	}

}