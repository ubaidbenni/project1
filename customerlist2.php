
<table class="table table-hover table-inverse" style="position:absolute;background-color:;top:0px;left:0px;">
<?php
$name=$_GET['name'];
include('dbconnect.php');
$dbs=dbconnect();
$query="select * from add_customer where name='$name'";
$result=mysqli_query($dbs,$query);
$data=mysqli_fetch_all($result);
mysqli_close($dbs);
$c=count($data);
 echo "<tr><th>date</th><th>name</th><th>fanme</th><th>gender</th><th>mob_no</th><th>email</th><th>address</th><th>balance</th></tr>";
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


 ?>
