<?php
//i want to use Object oriented Programming with class

class Connect{
	//variable declaration called properties in OOP
	protected $connect;
	protected $server,$username,$pwd,$db_name;
		
	/*a constructor is a place were a class declares its depencies */
	public	function __construct($server,$username,$pwd){
		$this->server = $server;
		$this->username = $username;
		$this->pwd = $pwd;
		$this->db_name = "Betting";	
			
	
		}
		/*here i created a property and i pass an argument then i run the connection query*/
		public function Dbconnection(){
			$this->connect = mysqli_connect($this->server,$this->username,$this->pwd) or die();
			$this->connect = mysqli_select_db($this->connect,$this->db_name) or die();
		
		}
		/*the static keyword ensures the object doesnt need to be instantiated before executing the method  */
		public function Errormsg($msg_error){
			if($this->connect){
				echo $msg_error;	
			}else{
				return 	false;
			}
		
		}
		
								
	
	}
	
	//instantiate the object of the class
	$connect = new Connect("localhost","root","");
	$connect->Dbconnection();
	$connect->Errormsg('Connected');
	
	
	
	
	
	
	
?>
