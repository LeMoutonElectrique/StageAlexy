<!DOCTYPE html>
<html>
<head>
<?php
	$headtitle = "<h1>".('$#headtitle')	."</h1>";
	include ("../head.php");
?>
</head>
<body>
	<button>Salut les gars!</button>
	<h1 id = "headtitle">Titre</h1>

	<p id="pouf">prout</p>
	<script>
$('button').click(function(){
        var ValBtn=$(this).html();
        $('#pouf').html(ValBtn);
        });
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>