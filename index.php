<?php


// $hostname = "sql2.njit.edu";
// $username = "rjc43";
// $password = "pxNGdj5c";
// try {
// 	    $conn = new PDO("mysql:host=$hostname;dbname=rjc43", $username, $password);


//     }
// catch(PDOException $e)
//     {
//     	echo "Connection failed: " . $e->getMessage() + "</br>";
//     }


// $conn = null;

?>












<!doctype html>
<html>
<head>
	<title>Sign In</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>



<body>
	
	<div class="content">
		<div class="top_block top_side">
			<div class="content" >


				<P class="titlep">Sign In Page</P>

			</div>
		</div>
		<div class="background middle">
		</div>
		<div class="middle">
			<div class="contentbody">

				</br></br>

				<form action="welcome.php">
					<div class="inputs">
						E-Mail: <input class="inputsignup"  type="text" name="email"><br>
						Password: <input class="inputsignup"  type="text" name="password"><br><br>
					</div>


					<button type="signup" class="button" onclick="buttonSignIn()">Sign In</button>      


				</form>
				<br>

					<button type="signup" class="button" onclick="buttonSignUp()">Sign Up</button>      <br><br><br>

			</div>
		</div>
	</div>

</body>
</html>

