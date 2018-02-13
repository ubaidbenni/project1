<?php
class connectdb
{
     public function dbconnect()
     {

        $dbs=mysqli_connect("localhost","root","","biz_dairy")
         or die("error is connection");
	 
         return $dbs;

      }
 }
?>