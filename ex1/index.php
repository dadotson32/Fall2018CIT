<!DOCTYPE>
<html> 
	<head>
		<title>My Assignment</title>
	</head>
	
	<body>
		
		<?php
		include "includes/header.inc.php" ;
		?>
		
		
	<?php
	
		$favorite[] = "Dewayne Dotson";
		$favorite[] = "Orange";
		$favorite[] = "The Matrix";
		$favorite[] = "A Song of Ice and Fire";
		$favorite[] = "www.kiplinger.com";
		
		
		echo "<h1>$favorite[0]</h1>";
		
		function myFav() 
		{
			$favorite = array("Dewayne Dotson", "Orange", "The Matrix",
			"A Song of Ice and Fire", "www.kiplinger.com");
		
		for ($i=1; $i<5; $i++) {
			$val = $favorite[$i];
		echo "<ul><li>$val </li></ul>";}
		
		
		}
		myFav();
	?>
		
		<?php
		include "includes/footer.inc.php" ;
		?>
	
	
	
	</body>
	
</html>		