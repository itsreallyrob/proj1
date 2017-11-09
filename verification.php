<?php


$hostname = "sql2.njit.edu";
$username = "rjc43";
$password = "pxNGdj5c";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=rjc43", $username, $password);


	    session_start();
  		$useremail = $_POST['email'];
  		$userpass = $_POST['password'];
  		$userfname = $_POST['fname'];
  		$userlname = $_POST['lname'];
  		$userphone = $_POST['phone'];
  		$userbirthday = $_POST['birthday'];
  		$usergender = $_POST['gender'];
  		$email = $_POST['email'];

  		$_SESSION['email'] = $_POST['email'];
  		$_SESSION['password'] = $_POST['password'];
  		$_SESSION['fname'] = $_POST['fname'];
  		$_SESSION['lname'] = $_POST['lname'];
  		$_SESSION['phone'] = $_POST['phone'];
  		$_SESSION['birthday'] = $_POST['birthday'];
  		$_SESSION['gender'] = $_POST['gender'];


		if($useremail == "" || $userpass == "" || $userfname == "" || $userlname == ""  ||  $userphone == "" ||  $userbirthday == "" )
  		{
  			$_SESSION['errorsession'] = "You did not fill everything out!";
  			$_SESSION['errorsent']=true;
  			header("Location: signup.php");
  			exit;
  		}
  		

  		$emailThere = false;

  				$result = $conn->prepare("SELECT id, fname, lname, phone, birthday, password, email, gender FROM accounts WHERE email = '$email' ");
				$result->execute();


		for($i=0; $row = $result->fetch(); $i++){
		  		// $_SESSION['id'] = $row['id'];
		  		// $_SESSION['fname'] = $row['fname'];
		  		// $_SESSION['lname'] = $row['lname'];
		  		// $_SESSION['phone'] = $row['phone'];
		  		// $_SESSION['birthday'] = $row['birthday'];
		  		// $_SESSION['password'] = $row['password'];
		  		// $_SESSION['gender'] = $row['gender'];
		  		// $_SESSION['email'] = $row['email'];

		  		if($_POST['email'] ==  $row['email'])
		  		{
					$emailThere = true;
		  		}
		  		else
		  		{
		  			$emailThere = false;
		  		}

		}




		if($emailThere == true)
		{
			$_SESSION['errorsession'] = "That email already exists!";
			$_SESSION['errorsent']=true;

			header("Location: signup.php");
	    	exit;
		}
		else
		{

			$highestid = 0;
			

			foreach ($conn->query("SELECT id FROM accounts") as $idlook)
			{
			   if($idlook["id"] > $highestid)
			   {
			   		$highestid = $idlook["id"];
			   }
			}



  			$nextid = $highestid+1;



			$sql = "INSERT INTO accounts (id, fname, lname, phone, birthday, password, email, gender)
		    VALUES ($nextid, $userfname', '$userlname', '$userphone', '$userbirthday', '$userpass', '$useremail', '$usergender')";
		    

		    $conn->exec($sql);

		    header("Location: welcome.php");
	    	exit;

		}
		

		




    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage() + "</br>";
    }


$conn = null;

?>