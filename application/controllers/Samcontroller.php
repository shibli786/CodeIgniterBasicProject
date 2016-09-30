<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class SamController extends CI_Controller {


public function __construct()
{

	parent::__construct();
	
	$this->load->database();
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('firstpage');
	}


	public function add()
	{
		

		$arr=array(
 
			'name'=>"syed",
			'address'=>"allahabad"
		);

		$this->db->insert("students",$arr);

		




	}

	public function get()
	{
		$query = $this->db->get("students"); 
		$data = $query->result();
			
		foreach ($data as $dat ) {
				echo $dat->id;
				echo "<br>";
				echo $dat->name;
						echo "<br>";

				echo $dat->address;
						echo "<hr>";
			
			}

	}
}
