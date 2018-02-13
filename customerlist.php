<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
   <style media="screen">
   @media only screen and (max-width: 500px){
     .form-control{
       height:26px;
       font-size: 10px;
     }
     h1{

       font-size: 30px;
       text-align: center;
     }
  #search{
       height: 23px;
       font-size: 10px;

     }
     #cancel{
          height: 27px;
          font-size: 10px;
          text-align: center;

        }
    #delete{
         height: 27px;
         font-size: 10px;


       }
    td{
        font-size: 12px;
        color:rgb(87, 184, 238);
      }
    th{
      font-size: 12px;

    }




   }
body{
  background-image: url("backg3.png");
  background-repeat: repeat-x;
}
#popup{
  position:relative;
  top:300px;
  width:300px;
  height:200px;
  left:30%;

  background-color: red;
  z-index: 1;



}



</style>
  </head>
  <body >





<div  class='container' style="background-color:;position:relative;height:800px;">

          <h1 class='text-xs-center' style="position:relative;top:8px;color:rgb(242, 242, 242);"> Customers List</h1>
  <div class='row' style="background-color:;">
    <div style="background-color:;position:relative;top:30px;" class='col-xs-12 col-md-10'>


       <div id='formdiv' class='col-xs-8' style="background-color:;">
            <input type="text" id="input" name="cn_tosearch" class='form-control' placeholder="enter name" /></br>
            <button id="search" class="btn btn-primary" onclick="search()"type="button" >Search</button>
            </form>

         </div>

       <script>
       function search(){
         var obj=new XMLHttpRequest;
         str=document.getElementById('input').value;
         obj.open("GET","customerlist2.php?name=" + str ,false);
         obj.send();
         document.getElementById('tablediv').innerHTML=obj.responseText;


       }

       </script>

       <div id="tablediv" class='col-xs-12' style="background-color:;overflow:scroll;position:relative;top:20px;height:450px;"  >
            <table class="table table-hover table-inverse" style="position:absolute;background-color:;top:0px;left:0px;">

        <?php
		include('dbconnect.php');
            if(isset($_POST['submit']))
               {
               $dbs=dbconnect();

                 foreach ($_POST['delete'] as $key) {

                     $d= " DELETE FROM `add_customer` WHERE name='$key'";

                     $result1=mysqli_query($dbs,$d);

                     mysqli_close($dbs);

                                                    }

              }
              $dbs=dbconnect();
              $q="select * from add_customer";
              $result=mysqli_query($dbs,$q)
              or die("error in query");
              $data=mysqli_fetch_all($result);
               mysqli_close($dbs);
              $c=count($data);

             echo "<tr><th>date</th><th>name</th><th>fanme</th><th>gender</th><th>mob_no</th><th>email</th><th>address</th><th>balance</th></tr>";

              ?>


        <?php
           for ($i = 0; $i <= $c-1; $i++)
           {

              echo '<tr>';
              echo '<td>'.$data[$i][0].'</td>';
              echo '<td>'.$data[$i][1].'</td>';
              echo '<td>'.$data[$i][2].'</td>';
              echo '<td>'.$data[$i][3].'</td>';
              echo '<td>'.$data[$i][4].'</td>';
              echo '<td>'.$data[$i][5].'</td>';
              echo '<td>'.$data[$i][6].'</td>';
              echo '<td>'.$data[$i][7].'</td>';

             echo '</tr><br />';
           }

             echo "</table>";
             echo "  </div>";

              echo '<input type="submit" id="delete" value="delete" class="btn btn-warning" name="submit" style="position:absolute;top:580px;left:60px">';
              echo '<a href=\'choice.php\'><button type="button"   id="cancel" value="cancel" class="btn btn-danger" name="submit" style="position:absolute;top:580px;left:200px" >Cancel</button></a>';



          ?>

   </div>
</div>

</div>



</body>
</html>
