<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="refresh" content="5">
</head>
<body bgcolor="lightblue">
<div align="left">
<font size="3"><a href="http://192.168.43.243/main.php">back</a> 

</div>
<h1 align="center"> The current temperature at Himayathnagar is</h1><br>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Temperature</th>
</tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weather";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT  * FROM sam WHERE id=(SELECT max(id) FROM sam)";

$res = $conn->query($sql);
if($res->num_rows>0){
        while($row = $res->fetch_assoc()){
  ?>    
        <tr>
           <td><?php echo $row['temperature'];  ?></td>
         </tr>

       <?php   
    }
}
else
{
    echo " no records found";
}
$connection->close();




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>



</body>
</html>
