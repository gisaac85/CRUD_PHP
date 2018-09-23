
<?php

$db=new mysqli;
$db->connect("localhost","root","","crud");
if(!$db){
die('error').'<br>';
}
/*
//echo 'connected successfully!'.'<br>';
//$sql="select * from tasks";
//$rows=$db->query($sql);
//while($row=$rows->fetch_assoc()){
//echo $row['id'].'.'.'&nbsp;';
//echo $row['name']."<br>";
//};
*/
?>


<?php

//$link = mysqli_connect("localhost", "root", "", "crud");

/* check connection */
//if (mysqli_connect_errno()) {
//    echo "Connect failed";
//}

//$query = "SELECT * FROM tasks";

//if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
  //  while ($row = mysqli_fetch_assoc($result)) {
    //    echo $row["id"].'.'.'&nbsp;';
	//	echo $row["name"].'<br>';
    //}

    /* free result set */
  //  mysqli_free_result($result);
//}

/* close connection */
//mysqli_close($link);


?>
