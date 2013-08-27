
<?php    
     $db_connection = null; // database connection
     $user_name = ""; // user's name
     $user_email = ""; // user's email
     $user_password = ""; // user's password (what comes from POST)
     $registration_successful = false;
     $errors = array(); // collection of error messages
     $messages = array(); // collection of success / neutral messages
	
	define("DB_HOST", "localhost");
	define("DB_NAME", "codecalltut");
	define("DB_USER", "harshit");
	define("DB_PASS", "laddha");

	if (empty($_POST['loginuser'])) {

            $errors[] = "Empty Username";

        } elseif (empty($_POST['loginpassword'])) {

            $errors[] = "Empty Password";

        } elseif (
		!empty($_POST['loginuser']) && 
		!empty($_POST['loginpassword'])
		)
       {
		$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			$user_name = $db_connection->real_escape_string(htmlentities($_POST['loginuser'], ENT_QUOTES));
			$user_password = $_POST['loginpassword'];
			$query_check_user_name = $db_connection->query("SELECT * FROM users WHERE user_name = '" . $user_name . "' and password = '" . $user_password . "';");
			
			if ($query_check_user_name->num_rows == 1) {
				session_start();
				$_SESSION['views']=$user_name;
				include("registered.php");
                	}
			else {
					
                	}
						
      }	
    
	
?>

