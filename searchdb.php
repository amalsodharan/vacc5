<?php
            $host = "localhost";
            $username = "root"; 
            $password = ""; 
            $database = "evaccine";
            $mysqli=mysql_connect($host,$username,$password);
            mysql_select_db($database,$mysqli); 
            $slotid=$_REQUEST['slotid'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("evaccine",$con);
            $query="select * from slot where slotid='$slotid'";
            $res=mysql_query($query,$mysqli);
                    if($res>0)
                    echo "Registration successful!";
                    header("location:confirmation.php");
?>