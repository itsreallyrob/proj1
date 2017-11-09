<?php
session_start();

if($_SESSION['errorsent']== true)
{

	$_SESSION['errorsent']=false;
}
else
{
	$_SESSION['errorsession'] = "";
	$_SESSION['errorsent']=false;

}


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

				<form method="POST" action="validation.php">
					<div class="inputs">
						E-Mail: <input class="inputsignup"  type="text" name="email" id="email"><br>
						Password: <input class="inputsignup"  type="text" name="password" id="password"><br><br>
					</div>


					<button type="signup" class="button" onclick="buttonSignIn()">Sign In</button>      


				</form>
				<br>
				<form action="signup.php">
					<button type="signup" class="button" onclick="buttonSignUp()">Sign Up</button>      <br><br><br>
				</form>

				<?php
					echo $_SESSION['errorsession'];

				?>

			</div>
		</div>
	</div>

</body>
</html>

