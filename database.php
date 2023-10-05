<?php
  
  class Database{
    
    private $connection;
    function __construct(){
    
      $this->connect_db();
    }
    
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($title, $fname, $lname, $email, $IDno, $mailingaddress, $phonenumber, $employmentstatus, $income, $accounttype, $usagepurpose){
      $sql = "INSERT INTO bankaccount (Title, fname, lname, Email, Government_ID, Mailing_Address, Phone_Number, Employment_Status, Annual_Income, Account_Type, Purpose) VALUES ('$title', '$fname', '$lname', '$email', '$IDno', '$mailingaddress', '$phonenumber', '$employmentstatus', '$income', '$accounttype', '$usagepurpose')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM bankaccount";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
