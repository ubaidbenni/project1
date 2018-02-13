



     <table  style="position:absolute;left:0px;top:0px"  class="table table-hover table-inverse" >
            <tr >
              <th>name</th>
              <th>dress</th>
              <th>date</th>
              <th>amount</th>
            </tr>



<?php
include('dbconnect.php');
          $name=$_GET['name'];


          $dbs=mysqli_connect("localhost","root","","biz_dairy")
          or die("connection error");
          $q=" SELECT * FROM `history` WHERE name='$name'";
          $result=mysqli_query($dbs,$q)
          or die("error in query");
          $data=mysqli_fetch_all($result);
           mysqli_close($dbs);
          $c=count($data);

               for ($i = 0; $i <= $c-1; $i++)
               {

                  echo '<tr style="position:relative;height:35px;">';
                  echo '<td>'.$data[$i][0].'</td>';
                  echo '<td>'.$data[$i][1].'</td>';
                  echo '<td>'.$data[$i][2].'</td>';
                  echo '<td>'.$data[$i][3].'</td>';


                 echo '</tr><br />';
              }

  ?>

        </table>
