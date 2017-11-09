<?php
session_start();

?>


<!doctype html>
<html>
<head>
	<title>Welcome</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>



<body>
	
	<div class="content">
		<div class="top_block top_side">
			<div class="content" >


				<P class="titlep">Welcome Page</P>

			</div>
		</div>
		<div class="background middle">
		</div>
		<div class="middle">
			<div class="contentbody">

				</br></br>
 
				<?php echo "Hello " . $_SESSION["fname"] . " " . $_SESSION["lname"] . ".<br>"; ?>

			</div>
		</div>
	</div>

</body>
</html>

