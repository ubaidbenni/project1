<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
   <style media="screen">

     #signup_div{

       position: relative;
       top:150px;
       width:300px;
       height:350px;
       left:40%;
     }
     .btn,.btn-primary,button{
       position:relative;
       left:77px;
       top:50px;


     }
     body{
      
     }
     h1{
       position: relative;
       left:42%;
       top:100px;
       font-family: Courier New;
       font-size: 60px;
     }
       i{
         position: relative;
         top:160px;
         left:44%;
       }


   </style>
  </head>
  <body>


    <h1>sign up</h1>
    <div id="signup_div">
    <form method="post" action="sign_up.php">
      <div>
        <label>Name</label><input type="text" name="signup_name" value="" class="form-control" placeholder="name"/>
      </div>
      <div>
        <label>FName</label><input type="text" name="signup_fname" value="" class="form-control" placeholder="fname" />
      </div>
      <div>
        <label>Password</label><input type="password" name='signup_pass' value="" class="form-control" placeholder="Pass" />
      </div>
      <input type="submit" name="submit" class="btn btn-primary" style="position:relative;left:40px;" />
      <button type="button" class="btn btn-primary" >Cancel</button>

    </form>


    </div>


    <i>click here to <a href="login.php"><b>login</b></a></i>

    <?php
  include('dbconnect.php');
   if(isset($_POST['submit']))
   {

    $signup_name=$_POST['signup_name'];
    $signup_fname=$_POST['signup_fname'];
    $signup_pass=$_POST['signup_pass'];
	


   $dbs=dbconnect();

     $q="INSERT INTO `sign_up`(`name`, `lname`, `password`) VALUES ('$signup_name','$signup_fname','$signup_pass')";

     $result=mysqli_query($dbs,$q)
     or die("error in query");


     mysqli_close($dbs);

  echo "complited";



}


     ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
