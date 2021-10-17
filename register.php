<?php
session_start();
 if(!isset($_SESSION['username']))
 { header("Location:login.php");
 exit(0); } 
 
 else {

 print $_SESSION['username'];}
 
?>
<?php 
    $page_title="Register";
    include("header.inc");
 ?>

<nav>
            
			<div id="navigation">
				<a href="home.php">Home</a>
				<a href="location.php">Locations</a>
				<a href="mapMode.php">Map</a>
				<a href="register.php">AddAdmin</a>
				<a href="add_location.php">AddLocation</a>
				<a href="logout.php">Logout</a>
				<input type="text" placeholder="Search.." id="searchbar">
			</div>
				
			</nav>

 <main>
        <h2>Register</h2>
        <form method="post" action="process_register.php">
            Username: <input type="text" name = "username"><p>
            Password: <input type="password" name="password"><p>
            <input type="Submit" value="Register Now">
        </form><p>
 
 </main>
 
 <?php 
    include("footer.inc");
 ?>