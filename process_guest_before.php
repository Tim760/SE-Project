<?php
	include("header.inc");
	include("nav.inc");
	
?>
<main>
<?php
 $fullname = $_POST['fullname'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];

 $db = mysqli_connect("localhost", "root", "","sepm" );

 $q = "insert into users values(null, '$fullname', '$phone', '$email')"; 
 mysqli_query($db, $q); 
 ?>
 <h3> You've successfully checked-in!</h3>
 <a href="home.php">Back to Home Page </a><p>
 </main>
 <?php
	include ('footer.inc');
?>