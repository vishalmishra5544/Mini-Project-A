<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["password"]) || !empty($_POST["username"])) {
  $query = "SELECT * FROM `registration` WHERE `password`  = '". $_POST["password"] ."' AND `username` = '".$_POST["username"]."';";	
  //$query = "SELECT * FROM  WHERE userName='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<i class='fas fa-thumbs-up fa-2x' style='color: #006500;'></i>";
  }else{
      echo "<i class='fas fa-thumbs-down fa-2x' style='color: #650000;'></i>";
  }
}
?>