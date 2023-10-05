<?php
  
  class Database{
    
    private $connection;
    //construct method
    function __construct(){
    
      $this->connect_db();
    }
    
    //connect with the database
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1');

      //if unable to connect to database outputs the connection faileed along with error message
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }

    //create function for inserting the data received into the table or database created
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
