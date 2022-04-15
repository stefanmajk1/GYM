<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style="margin: 10px;">
<div>
    <a class="btn btn-primary" href="logout.php" style="float: right;">Logout</a><br>
    </div>
<?php 

require_once 'process.php';

?>

<?php 

if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php 

  echo $_SESSION['message'];
  unset($_SESSION['message']);


?>
</div>
<?php endif  ?>
<div class="container">

<?php 

$mysqli = new mysqli("localhost", "root", "", "baza");

if($mysqli->error){
die("Greska povezivanje sa bazom " . $error);
}
$result = $mysqli->query("SELECT * FROM register");

?>

<div class="row justify-content-center">
<table class="table">
  <thead>
    <tr>
      <th>Username</th>
      <th>Gmail</th>
      <th>Password</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <?php 
  
  while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td>
      <a class="btn btn-info" href="adminInterface.php?edit=<?php echo $row['id'];?>">Edit</a>
      <a class="btn btn-danger" href="process.php?delete=<?php echo $row['id'];?>">Delete</a>
    </td>
  </tr>
    <?php endwhile; ?>
</table>
<?php


?>

  <form action="process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter username">
    </div>
    <div class="form-group">
    <label>Gmail</label>
    <input type="text" name="gmail" class="form-control" value="<?php echo $mail; ?>"  placeholder="Enter gmail">
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" class="form-control" value="<?php echo $pass;?>"  placeholder="Enter password">
    </div><br>
    <?php if($update== true): ?>
      <button type="submit" class="btn btn-info" name="update">UPDATE</button>
      <?php else: ?>
    <button type="submit" class="btn btn-primary" name="save">SAVE</button>
    <?php endif ?>
  </form>
  </div>
  
</body>
</html>