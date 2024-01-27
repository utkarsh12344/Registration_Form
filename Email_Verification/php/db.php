<?php
 $conn=new mysqli('localhost','root','','usersform');
 if($conn){
    echo "Connection Successfull";
 }
 else{
    echo "Connection Deneid";
 }
?>   