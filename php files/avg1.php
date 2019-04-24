<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="refresh" content="10">
</head>
<body bgcolor="lightblue">
<div align="left">
<font size="3"><a href="http://192.168.43.243/select.php">back</a> 

</div>
<h1 align="center"> WEATHER </h1>
<table border="1" align="center" style="line-height:25px;">
<tr>

<th>AVG Temp</th>

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

//$sql = "INSERT INTO tem   VALUES ({$_GET["temp"]})";
$sql = "SELECT  avg(temperature) FROM sam";

$res = $conn->query($sql);
if($res->num_rows>0){
        while($row = $res->fetch_assoc()){
  ?>    
        <tr>
       <td><?php echo $row['avg(temperature)'];  ?></td>
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
