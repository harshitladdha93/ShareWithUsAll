<?php    
     $db_connection = null; // database connection
     $user_name2 = ""; // user's name
     $user_password2 = ""; // user's password (what comes from POST)
     $errors = array(); // collection of error messages
     $messages = array(); // collection of success / neutral messages
	
	define("DB_HOST", "localhost");
	define("DB_NAME", "codecalltut");
	define("DB_USER", "harshit");
	define("DB_PASS", "laddha");

	if (empty($_POST['new_user'])) {

            $errors[] = "Empty Username";

        } elseif (empty($_POST['new_password'])) {

            $errors[] = "Empty Password";

        } elseif (
		!empty($_POST['new_user']) && 
		!empty($_POST['new_password'])
		)
       {
		$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$user_name2 = $db_connection->real_escape_string(htmlentities($_POST['new_user'], ENT_QUOTES));
                $user_password2 = $_POST['new_password'];
		$query_new_user_insert = $db_connection->query("INSERT INTO users (user_name, password) VALUES( '" . $user_name2 . "', '" . $user_password2 . "');");

                    if ($query_new_user_insert) {
			session_start();
			$_SESSION['views']=$user_name2;
			include("registered.php");
                    } else {
			echo "registration unSuccessful";
                    }
			
			
						
      }	
    
	
?>

