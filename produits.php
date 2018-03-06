<!DOCTYPE html>
<html>
<head>

<?php
	
	
	
require_once("FunctionLib.php");
require_once("StructLib.php");

echo getHead("Les Produits");


?>

</head>
<body>
	<div id="main">
<?php 
		echo getHeader();
		echo getMenuDéroulantContent();
		
?>

	

<main>

	<h1> Les Produits du moments</h1>

<?php 
		echo getListProducts();
		
?>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam libero lacus, tempus eu urna id, ultricies imperdiet urna. Etiam lacinia ex ligula, et elementum erat tincidunt et. Aenean varius ex purus, consequat auctor nulla efficitur a. In convallis viverra eros ac efficitur. Morbi quis ultrices sapien. Nulla vitae lectus sed elit dictum ultricies vel at justo. Sed pretium metus id lorem hendrerit tempor.

Curabitudunt. Vivamus consectetur leo quis metus porttitor, auctor hendrerit nunc ullamcorper. Maecenas eget pretium arcu. Vestibulum tempus lacus in urna tincidunt cursus. Quisque sollicitudin urna sed tellus laoreet mattis.

Etiam consequat suscipsectetur a leo eu, pretium aliquet libero. Etiam non elementum ante, ut ultrices massa. Nam lectus neque, vulputate sit amet efficitur sit amet, aliquam a velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
Aliquam rutrum eros tempus neque sodales porttitor. Nulla facilisi. Duis sed nibh tempus, gravida velit vitae, commodo tellus. Nam lobortis eleifend cursus. Proin condimentum lacus eget vestibulum dapibus. Sed ullamcorper ex vulputate efficitur mollis eget, porta posuere ante. Nulla odio leo, lobortis posuere purus vel, mollis congue dui. Vivamus mattis arcu id ipsum mollis, ac pretium lorem faucibus. Proin feugiat condimentum egestas. Nunc dignissim, sem id laoreet luctus, elit metus tristique orci, eget convallis turpis nibh efficitur libero. Quisque vel posuere leo. Integer mattis euismod purus at pharetra. Maecenas ipsum turpis, posuere ut orci nec, tincidunt porta tortor.

Donec volutpat facilisis commodo. Phasellus ante eros nec nulla. Ut vitae congue nulla.

Nulla et est in mauris venenatis placerat vitae ornare est. In vel lorem sed sapien varius auctor. Vivamus venenatis est vehicula laoreet pellentesque. Donec vulputate eros vitae urna blandit rutrum. Donec erat turpis, pulvinar bibendum enim quis, blandit blandit mauris. Maecenas auctor justo et nisl eleifend maximus. Nulla interdum maximus elementum. Suspendisse potenti. Quisque odio sem, tempor ut erat vitae, volutpat semper eros. Aliquam accumsan tempus tristique. Phasellus consectetur quis orci eleifend gravida. Aliquam erat volutpat.
augue. Vestibulum in finibus ante. Curabitur id nibh orci. Nulla facilisi. Donec pharetra arcu diam, sed fringilla neque feugiat eget. Nam nec neque eu dui eleifend elementum sed quis nisl. Mauris augue sapien, ullamcorper quis ultricies eu, cursus sit amet sem. Proin ac velit ac tellus commodo fermentum. Vestibulum euismod ante leo, nec faucibus diam consectetur vitae.

Proin sollicitudin orci sed leo volutpat, quis consectetur lacus faca tincidunt ligula. In hac habitasse platea dictumst. Donec diam augue, laoreet eget sagittis sagittis, iaculis id diam. Quisque laoreet quam sit amet tellus dignissim lobortis. Quisque eleifend ut sapien id bibendum. Sed sed turpis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius metus imperdiet ipsum tincidunt accumsan. Aenean mollis lacus nec ex condimentum bibendum. Nulla sed orci metus. Fusce tristique, libero id fermentum egestas, libero sem gravida erat, id scelerisque neque tellus in eros. Suspendisse egestas ligula non tincidunt venenatis. Morbi feugiat sapien sed ex euismod suscipit. Pellentesque a enim.</p>

</main>


<?php
	echo getFooter();
?>
</div>
</body>
</html>