<!DOCTYPE html>
<?php 
include 'db.php'; 
$sql="select * from tasks";
$rows=$db->query($sql);
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
  <h1>TODO List</h1>
</center>
<div class="container">
  <div class="row" style="margin-top:70px;">
    <div class="col-md-10 col-md-offset-1">
      <table class="table">
        <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Todo</button>
        <button type="button" class="btn btn-default btn-style">Print</button>
        <hr>
        <br>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog"> 
            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add TODO</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="add.php">
                  <div class="form-group">
                    <label> Todo Name: </label>
                    <input type="text" required name="task" class="form-control" />
                  </div>
                  <input type="submit" name="send" value="Add" class="btn btn-success" />
                  
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Todo</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
         
          <?php
		  
		   //Showing MySQL DB in PHP with PHP
		  while($row=$rows->fetch_assoc()):
		 
		 ?>      
            <th scope="row"><?php echo $row['id']?></th>
            <td contenteditable='true' class="
            col-md-10"><?php echo $row['name']?></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Remove</a></td>
          </tr>
           <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>