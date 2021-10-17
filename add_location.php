<?php
session_start();
 if(!isset($_SESSION['username']))
 { header("Location:login.php");
 exit(0); } 
 
 else {

 print $_SESSION['username'];}
 
?>
<?php
	include ("header.inc");
	?>
<nav>
            
			<div id="navigation">
				<a href="home.php">Home</a>
				<a href="location.php">Locations</a>
				<a href="mapMode.php">Map</a>
				<a href="register.php">AddAdmin</a>
				<a href="add_location.php">AddLocation</a>
				<a href="logout.php">Logout</a>
				
			</div>
				
			</nav>
	
<main>
<h2>Add Location</h2>
<hr width=100%>
<form method="post" action="process_add_location.php" enctype="multipart/form-data">
<label for="Suburb"> Suburb </label>
<input type="text" name="suburb" id="suburb" placeholder="Suburb"><p>
<label for="Location"> Location </label>
<input type="text" name="location" id="location" placeholder="Location"><p>
<label for="Site-Type"> Site Type </label>
<input type="text" name="site_type" id="site_type" placeholder="Site Type"><p>
<label for="Operation-Hour"> Operation Hour </label>
<input type="text" name="opening_hour" id="operation_hour" placeholder="Operation Hour"><p>
<label for="Wait-Time"> Estimated Wait Time </label>
<input type="text" name="waittime" id="waittime" placeholder="Wait Time"><p>
<label for="Phone-Number"> Phone Number </label>
<input type="text" name="phone" id="phone" placeholder="Phone Number"><p>
<label for="Legend"> Legend Image </label>
<input type="file" name="legend" ><p>
<button type="submit">Submit</button>
</form>
</main>

<?php
	include ("footer.inc");
?>