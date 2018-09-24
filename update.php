<!DOCTYPE html>
<?php 
include 'db.php'; 
$id=(int)$_GET['id'];
$sql="select * from tasks where id='$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send']))
{
$task=htmlspecialchars($_POST['task']);
$sql="UPDATE tasks SET name='$task' WHERE id='$id'";
$rows=$db->query($sql);
header('location:index.php');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>CRUD APP</title>
</head>
<body>
<center>
  <h1>Update TODO List</h1>
</center>
<div class="container">
  <div class="row" style="margin-top:70px;">
    <div class="col-md-10 col-md-offset-1">
      <hr>
      <br>
      <form method="post">
        <div class="form-group">
          <label> Todo Name: </label>
          <input type="text" required name="task" 
          value=<?php 
		  echo $row['name'];		  
		   ?>
           class="form-control" />
        </div>
        <input type="submit" name="send" value="Update Todo" class="btn btn-success" /> &nbsp;
        <a href="index.php" class="btn btn-warning">Back</a>
      </form>
        
     
  </div>
</div>
</div>
</body>
</html>