<html>
    <head>
        <h1>FEEDBACK DETAILS</h1>
           </head>
<body bgcolor="powderblue">
<?php
$host="localhost";   
    $user="root";   
      $pwd="";   
        $dbname="mysql";     $con=mysqli_connect($host,$user,$pwd,$dbname);
if($con)     {      echo "connected <br>"; 
                                                                                         

$sql = "SELECT * FROM feedback1";
$result = $con->query($sql);

  if ($result) {
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - Name: ". $row["name"]."   " . $row["feedback"] . "<br>";
    }
  }
else {
    echo "0 results";
}
             }
$con->close();
?>
</body>
</html>