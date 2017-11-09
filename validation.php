<?php


$hostname = "sql2.njit.edu";
$username = "rjc43";
$password = "pxNGdj5c";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=rjc43", $username, $password);


	    session_start();
  		$useremail = $_POST['email'];
  		$userpass = $_POST['password'];
  		$email = $_POST['email'];


  		if($_POST['email'] == "")
  		{
  			$_SESSION['errorsession'] = "You did not enter a username!";
  			$_SESSION['errorsent']=true;
  			header("Location: index.php");
  		}
  		if($_POST['password'] == "")
  		{
  			$_SESSION['errorsession'] = "You did not enter a password!";
  			$_SESSION['errorsent']=true;
  			header("Location: index.php");
  		}





  		//$result = $conn->query("SELECT id, fname, lname, phone, birthday, password, email, gender FROM accounts WHERE email = '$email' ");
		//$result = mysql_query("SELECT id, fname, lname, phone, birthday, password, email, gender FROM accounts WHERE email = '$email' ");
  				$result = $conn->prepare("SELECT id, fname, lname, phone, birthday, password, email, gender FROM accounts WHERE email = '$email' ");
				$result->execute();


		for($i=0; $row = $result->fetch(); $i++){
		  		$_SESSION['id'] = $row['id'];
		  		$_SESSION['fname'] = $row['fname'];
		  		$_SESSION['lname'] = $row['lname'];
		  		$_SESSION['phone'] = $row['phone'];
		  		$_SESSION['birthday'] = $row['birthday'];
		  		$_SESSION['password'] = $row['password'];
		  		$_SESSION['gender'] = $row['gender'];
		  		$_SESSION['email'] = $row['email'];
		}










		if ($useremail == $_SESSION['email'] && $userpass == $_SESSION['password'])
		{
		    header("Location: welcome.php");

		    exit;
		}
		else
		{

			if($_SESSION['email'] == "")
			{
				$_SESSION['errorsession'] = "Email did not match!";
  				$_SESSION['errorsent']=true;
  				break;
			}
			else if($_SESSION['password'] == "")
			{
				$_SESSION['errorsession'] = "Password did not match!";
  				$_SESSION['errorsent']=true;
			}






			header("Location: index.php");
		    exit;

		}



    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage() + "</br>";
    }























$conn = null;

?>