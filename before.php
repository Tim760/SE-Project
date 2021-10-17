
<?php
	include('header.inc');
?>
	<nav>
            <!-- basic_qr.html-->
	<div id="navigation">
	Before COVID-19 Testing
		<input type="text" placeholder="Search.." id="searchbar">
	</div>
	    
    </nav>
	
	<main>
	<form method="post" action="process_guest_before.php" id="testingform">
	Full Name: <input id='name_text' name='fullname'><p>
	email	 : <input id="email_text" name="email"><p>
	Phone Number: <input id="phone_text" name="phone">
	
	<button type="submit">Submit</button>
	</form>
	
	
	</main>
	
	<footer>
	Coronavirus 2021 | Privacy
	</footer>
</body>
</html>