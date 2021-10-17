<?php
	include("header.inc");
?>
<?php
	include("nav.inc");
?>

<main>
<h2>Login</h2>
    <form method="post" action="process_login.php">
        Username: <input type="text" name="username" /><p>
        Password: <input type="password" name="password" /><p>
        <input type="submit" value="Login">
    </form>
</main>

<?php
	include("footer.inc");
?>
