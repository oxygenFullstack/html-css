<html>
  <head><link rel="stylesheet" type="text/css" href="csstest.css"></head>
 <body style="background-color:powderblue;">
 <center><h1 style= "color:blue;">Enter Your data</h1></center>
    <div class="homebutton">
        <ul>
    <li><a href="retrive.php">Feedbacks</a>
            </li>
            <li><a href="index.html">HomePage</a></li>
         </ul>
     </div>  
<div class="form1">            
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >  
 <fieldset>
     <legend>Feedback Form:</legend>     
 name:<br>     <input type="text" name="name" ><br> 
     mobile:<br>     <input type="text" name="mobile" ><br> 
 email:<br>     <input type="text" name="email" ><br>
 address:<br>     <input type="text" name="address" ><br> 
 feedback:<br>     <input type="text" name="feedback" ><br> 
<br>     <input type="submit" value="Submit"> 
  </fieldset> 
</form> 
</div>
 
<?php       if(isset($_POST["name"]))    {     
$v1=$_POST["name"];     
$v2=$_POST["mobile"];
$v3=$_POST["email"];
$v4=$_POST["address"];
$v5=$_POST["feedback"];
echo "Name is : ".$v1."<br>";   
echo "mobile number : ".$v2."<br>";  
echo "email is : ".$v3."<br>";
echo "address is : ".$v4."<br>";
echo "feedback is : ".$v5."<br>";                                             
  $host="localhost";   
    $user="root";   
      $pwd="";   
        $dbname="mysql";     
        $con=mysqli_connect($host,$user,$pwd,$dbname);   
  if($con)     {      echo "connected <br>";  
    $sql="insert into feedback1 values('$v1','$v2','$v3','$v4','$v5')";   
    $row=mysqli_query($con,$sql);  
    if($row)      echo "succeessful <br>";
       }  
    else     {      
        echo "not connected"; 
        echo "failed to connect";   
    }          
exit();   
        }
     ?>
    </body>
</html> 