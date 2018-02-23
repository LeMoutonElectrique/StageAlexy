<!DOCTYPE html>
<html>
<head>

<?php
require_once("StructLib.php");
require_once("FunctionLib.php");

echo getHead("Titre de Test");
?>

</head>
<body>
		
<?php
	
	echo getHeader();

?>

<?php
	
	
	echo getMenuDéroulantContent();
?>
<main>
<?php
	
	echo getListProducts();
	


?>
</main>

<?php

	echo getFooter();

	
?>

</body>
</html>
