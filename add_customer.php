<?php
require('dbconnect.php');
class add extends connectdb
{
	public $date=0;
	public $name=0;
	public $fname=0;
	public $gender=0;
	public $mob_no=0;
	public $email=0;
	public $address=0;
	public $balance=0;
	public $errstr="";
public function add()
	  { 
	$this->date=$_POST['date'];
	$this->name=$_POST['name'];
	$this->fname=$_POST['fname'];
	$this->gender=$_POST['gender'];
	$this->mob_no=$_POST['mob_no'];
	$this->email=$_POST['email'];
	$this->address=$_POST['address'];
	$this->balance=$_POST['balance'];
	$this->errstr="";
	  
	  
	  }
	  


		function collect()
			   {

					
					if(empty($this->date)){
						$this->errstr.="data field is empty</br>";
					}
					if(empty($this->name)){
						$this->errstr.="name field is empty </br>";
					}
					if(empty($this->fname))
					{
						$this->errstr.="fname field is empty </br>";
					}
					if(empty($this->gender))
					{
						$this->errstr.="gender field is empty</br>";
					}
					if(empty($this->mob_no))
					{
						$this->errstr.="mobile no is empty</br>";
					}
					if(empty($this->email))
					{
						$this->errstr.="email  is empty</br>";
					}
					if(empty($this->address))
					{
						$this->errstr.="address  is empty</br>";
					}
					if(empty($this->balance))
					{
						$this->errstr.="balance  is empty</br>";
					}
					$this->procced($this->errstr);
			      
                }
				
				
			function procced($errstr)
			  {
				  if(empty($errstr))
				   {

						$dbs=$this->dbconnect();
						$q="INSERT INTO `add_customer`(`date`, `name`, `fname`, `gender`, `mob_no`, `email`, `address`, `balance`) VALUES ('$this->date','$this->name','$this->fname','$this->gender','$this->mob_no','$this->email','$this->address','$this->balance')";

						$result=mysqli_query($dbs,$q)
						or die("error is query");

						mysqli_close($dbs);
						echo "complited";

					}
					else
					    echo $errstr;
			  }
}

$obj = new add();
$obj->collect();






?>
