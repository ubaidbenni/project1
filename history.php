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
  position:relative;
  left:40%;
  top:200px;


  }
  #tabdiv{
    overflow:auto;
  }

    #input{

      margin-top: 10px;
      margin-bottom: 10px;

}
body{
  background-image: url('backg3.png');
  background-repeat: repeat-x;
}

@media only screen and (max-width:500px) {
    #cancel{
    position:relative;
    left:3%;

    height: 20px;
    font-size: 7px;
  }

  #input{
    height: 30px;
    margin-top: 10px;
    margin-bottom: 10px;



    }
    #click{
      height: 20px;
      font-size: 7px;

    }


    th{
      font-size:12px;
      color:rgb(245, 239, 244);
    }
   td{
     font-size: 11px;
     color:rgb(84, 200, 244);
   }
 h1{
   font-size: 25px;
 }
}

  </style>

</head>
<body>
    <h1 style="top:40px;font-variant:small-caps;position:relative;top:20px;color:rgb(255, 255, 255);" class='text-xs-center'>Customer history</h1>
<div class="container" style="position:relative;background-color:;top:20px;height:600px">
    <div class="row" style="background-color:">

        <div style="backgroun-color:red;position:relative;">


              <div style="position:absolute;background-color:;display:block;top:30px;" class='col-xs-6'>
                  <input type='text' name='hname' id="input" value=''   placeholder="cutomer name" class='form-control' style="margin-left:0px;"/> </label>
                   <button id='click' type="button" name='but' class="btn btn-secondary" onclick="search()" >Search</button>
               </div>

<script>
      function search(){

      var str = document.getElementById('input').value;
      var obj = new XMLHttpRequest();

      obj.open("GET","history2.php?name=" + str, false);
      obj.send();
      document.getElementById('tabdiv').innerHTML=obj.responseText;
                      }
</script>
              <div  id="tabdiv" style="position:relative;top:130px;height:300px;">
                 <table  style="position:absolute;left:0px;top:0px"  class="table table-hover table-inverse" >
                    <thead >
                       <tr >
                         <th>name</th>
                          <th>dress</th>
                          <th>date</th>
                          <th>amount</th>
                        </tr>
                     </thead>
 <?php
   include('dbconnect.php');
    $dbs=dbconnect();
     $q="select * from history";
    $result=mysqli_query($dbs,$q)
     or die("error in query");
    $data=mysqli_fetch_all($result);
    mysqli_close($dbs);
     $c=count($data);
     for ($i = 0; $i <= $c-1; $i++)
       {

          echo '<td>'.$data[$i][0].'</td>';
          echo '<td>'.$data[$i][1].'</td>';
          echo '<td>'.$data[$i][2].'</td>';
          echo '<td>'.$data[$i][3].'</td>';
          echo '</tr><br />';
        }
?>
                    </table>
               </div>

        </div>
          <a  href='choice.php' > <button id='cancel' type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>

</body>
</html>
