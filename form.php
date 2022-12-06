<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $name = $_POST["name"];
  $email = $_POST["email"];
  if(empty($name)) {
    echo "Please Enter Your Name";
  }else {
    echo "Welcome ".$name;
  }
  
}
?>
