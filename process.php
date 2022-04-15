<?php 

session_start();
$name = "";
$pass = "";
$mail = "";
$update = false;
$id = 0;
$mysqli = new mysqli("localhost", "root", "", "baza");

if($mysqli->error){
  die("Greska povezivanje sa bazom " . $error);
}

if(isset($_POST['save'])){
  $name = $_POST['name'];
  $gmail = $_POST['gmail'];
  $password = $_POST['password'];

  $mysqli -> query("INSERT INTO register (username, email, password) VALUES ('$name', '$gmail', '$password')");

  $_SESSION['message'] = "Record has been saved!";
  $_SESSION['msg_type'] = "success";

  header("location: adminInterface.php");
}


if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM register WHERE id = $id");

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header("location: adminInterface.php");
}

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM register WHERE id = $id") or die($mysqli->error);
    $row = $result->fetch_assoc();
    $name = $row['username'];
    $mail = $row['email'];
    $pass = $row['password'];
  
  
 
}

if(isset($_POST['update'])){

  $id = $_POST['id'];
  $name = $_POST['name'];
  $mail = $_POST['gmail'];
  $pass = $_POST['password'];

  $mysqli->query("UPDATE register SET username='$name', email='$mail', password='$pass' WHERE id = $id");

  $_SESSION['message'] = "Record has been updated!";
  $_SESSION['msg_type'] = "warning";

  header("location: adminInterface.php");
}

?>