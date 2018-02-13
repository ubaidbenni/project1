



<!DOCTYPE html>
   <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
 <style media="screen">

  a{
    margin-left: 10%;
    position: relative;
    top:200px;
    left:0;

  }
  h1{
    text-align: center;
    font-family: fantasy;
    color: rgb(242, 241, 235);

  }
  #login{
    position: absolute;
    left:30%;
    top:500px;
  }
  body{
    background-image: url('backg3.png');
  }
@media only screen and (max-width:600px) {
  h1{
    font-size: 23px;
    color: rgb(139, 57, 227);
    position: relative;
    top:80px;
    font-family: fantasy;

  }
  img{
    width:80px;
    height:80px;


  }
  b{
    font-size: 10px;
  }
    body{
      background-image: url('sbackg3.png');
    }


}





 </style>

  </head>
  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-xs-12'>

            <h1>Select From Below Options</h1>
           <a id='img1' href="add_customer.html" style='display:inline-block'><div ><img src="add_customer.png"  width="100px" height="100px" style='display:block'/><b style='display:block'>Add_NewCustomer</b></div></a>
           <a id='img1' href="customerlist.php" style='display:inline-block'><div><img  style='display:block' src="list.png" width="100px" height="100px"/><b style='display:block' style="position:relative;right:20px;">Customer_List</b></div></a>
           <a id='img1' href="history.php" style='display:inline-block'><div><img style='display:block' src="history.png" width="100px" height="100px"/><b style='display:block' >History</b></div></a>

          <a id="login" href="login.php" style='display:block'><button type="button" class="btn btn-info">Logout</button>


        </div>

      </div>

    </div>


  </body>
</html>
