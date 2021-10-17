<?php
    $suburb = $_POST['suburb'];
    $location = $_POST['location'];
    $site_type = $_POST['site_type'];
    $opening_hour = $_POST['opening_hour'];
    $waittime = $_POST['waittime']; 
    $phone = $_POST['phone'];

	
	$db = mysqli_connect("localhost","root","","sepm") or die(mysqli_error($db)); 
	$q = "insert into location values(null, '$suburb', '$location', '$site_type', '$opening_hour', '$waittime', '$phone')";
    mysqli_query($db, $q) or die(mysqli_error($db));
    header("Location:home.php");
    exit(0);
?> 