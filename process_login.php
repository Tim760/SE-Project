<?php
	include("header.inc");
?>
<?php
	include("nav.inc");
?>

<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $db = mysqli_connect("localhost", "root", "","sepm" );

 $q = "select * from admins where username = '$username' and password = '$password'"; 
 
 $result = mysqli_query($db, $q); 
 
 if(mysqli_num_rows($result) > 0) 
 { 
 session_start(); 
 $_SESSION['username'] = $username;
 
 ?>

<main>
 <h3>You have logged in</h3><p>
     <div id= "admin_option">
 <a href="index.php" class="link1">Back to Home Page</a><p>
 <a href="add_location.php" class="link1">Add Location</a><p>
 <a href="register.php" class="link1">Add Admin</a><p>
 </div>
 <?php 
 } 
 else {
 print "<br>";
 print "<h3>Either you are not registered or your username or password is wrong</h3>"; 
 
  print "<br>";
 print " <a href= login.php> Click here to try Login again </a>";
 }
 ?>
 </main>
 <?php
	include ('footer.inc');
?>