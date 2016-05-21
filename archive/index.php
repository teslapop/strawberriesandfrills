<!DOCTYPE html>
<html>

<header>
	<title>Home</title>
	<link rel='stylesheet' type='text/css' href='ss.css'>
	
</header>
<body>
	<div id = 'main'>
		
		<div class='menu'>
			<ul>
				<li><a href='#'>Contact</a></li>
				<li><a href='#'>Share</a></li>
				<li><a href='#'>RSS</a></li>
			</ul>
		</div>

		<img src='images/banner.jpg'  width= '860px' height='400px'>


		<div class='menu'>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>About</a></li>
				<li><a href='#'>Links</a></li>
			</ul>
		</div>



	<?php 
	for ($x = 0; $x <= 100; $x++) {
	    echo "The number is: $x <br/>";
	} 
	?>

	</div>

</body>



</html>