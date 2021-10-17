<?php
	include("header.inc");
	include("nav.inc");
	
?>
<main>
<?php
 $username = $_POST['username'];
 $password = $_POST['password'];

 $db = mysqli_connect("localhost", "root", "","sepm" );

 $q = "insert into admins values(null, '$username', '$password')"; 
 mysqli_query($db, $q); 
 ?>
 <h3> You've successfully registered!</h3>
 <a href="home.php">Back to Home Page </a><p>
 <a href="logout.php">Logout to change account </a>
 </main>
 <?php
	include ('footer.inc');
?>