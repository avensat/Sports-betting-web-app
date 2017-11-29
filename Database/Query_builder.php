<?php
require("../Database/connect.php");
/* here i want to delegate task*/
Class Query extends Connect {
	protected $table,$query,$connect;
	/**/
	public function __construct($table){
		$this->table = $table;
		$this->query;
		$this->connect;
	
	}
	/**/
	public function SelectAll($table) {
		
		 $statment = "SELECT * FROM {$table}";
		 $this->query = mysqli_query($connect,$statment) or die();
	}
	/**/
	public function InsertQuery($table) {
		
	
	}
	/**/
	public function UpdateQuery($table) {
		
	
	}
	
	public function DeleteQuery($table) {
		
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	}

























?>