<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "demo";
    $dbCon=mysqli_connect($servername,$username,$password,$dbname);
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        else
        print("Connection Success");
?>
