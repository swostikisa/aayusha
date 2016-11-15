<html>
<body>
	<?php
	$name = $address = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = test_input($_POST["name"]);
		$address = test_input($_POST["address"]);
	}
	?>
	<h2>application form</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name= <input type="text" name="name">
	<br><br>
	Address= <input type="text" name="address">
	<br><br>
	<input type="submit" name="submit" value="SUbmit">
	</form>	

    <?php
    echo "<your name and address is:>";
    echo $name;
    echo $address;
    ?>
	</body>
</html>