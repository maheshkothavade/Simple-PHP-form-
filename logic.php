<?php
   if($_POST['id']=="ABC"){
    if($_POST['password']=="ABC123"){
        echo "Welcome ABC you successfully logged in";
    }
    else{
        echo "No entry";
    }
   }
   else{
    echo "Please login again";
   }
   
?>