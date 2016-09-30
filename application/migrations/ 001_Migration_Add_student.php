
<?


class Migration_Add_student extends CI_Migration
{	


	
	public static function up($value='')
	{
		$this->load->dbforge();
		$this->dbforge->add_field(
			'id'=>array(
				'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
				),
			'name'=>array(
				'type' => 'VARCHAR',
                'constraint' => '100',
				),
			'email'=>array(
				'type' => 'VARCHAR',
                'constraint' => '100',
				),
			'password'=>array(
				'type' => 'VARCHAR',
                'constraint' => '200',
				),
			'previous_college'=>array(
				'type' => 'VARCHAR',
                'constraint' => '100',
				),
			'address'=>array(
				'type' => 'VARCHAR',
                'constraint' => '200',
				));
			    $this->dbforge->add_key('id');
                $this->dbforge->create_table('student');
		
	}

	public function down($value='')
	{
		$ $this->dbforge->drop_table('student')
	}

}