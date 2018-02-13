<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <style>
    @media only screen and (max-width:1600px){
       body{




         background-image: url("backg3.png");
          background-repeat: repeat-x;
        }
        small{

          color:rgb(22, 244, 164);
        }


      i{
      position:absolute;
        left:35%;
        color:rgb(255, 255, 255);

      }
      label{
        color:rgb(5, 246, 246);
      }
      h1{
        text-align:center;
        font-size: 30px;
        position: relative;
        top:30px;
        color:rgb(227, 238, 19);
        font-family: Bookman;

      }

    }










    </style>


  </head>
  <body>

<h1 class='text-capitalize'>welcome to bizdiary</h1>
 <div class="container" style="background-color:;position:relative;top:80px;">
   <div class="row"  style="background-color:;">



 <div  class='col-xs-10  col-md-6 ' style="background-color:;height:350px">





       <form method="post" action="login.php">
      <label for="exampleInputEmail1">Username</label>
      <input id="name" class="form-control" type="text" name="username" value="" placeholder="username" />
      <small id="emailHelp" >We'll never share your email with anyone else.</small></br>
      <label for="exampleInputPassword1">Password</label><input id='password' class="form-control" type="text" name="password" value="" placeholder="password"/>





         <input style="position:absolute;top:230px;left:40px;" id='submit' type= "submit" name="login" id="login_button" value="login" class="btn btn-primary" >
         <input style="position:absolute;top:230px;left:140px;" id="welcom_cancel" type="button" name="cancel" value="cancel" class="btn btn-danger"></br>
       </form>
       <i style="top:300px;">click here to <a href="sign_up.php"><b style="color:rgb(221, 232, 3);">signup</b></a></i>


      </div>
       </div>
     </div>



  <?php
if(isset($_POST['login'])){
  echo "nice";

  $username=$_POST['username'];
  $password=$_POST['password'];



  if($username == "root" && $password == "tiger"){
      header("location:choice.php");

    }

   else{
     header("location:login.php");
   }



}

   ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
