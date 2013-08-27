

    <?php
session_start();

	define("DB_HOST", "localhost");
	define("DB_NAME", "codecalltut");
	define("DB_USER", "harshit");
	define("DB_PASS", "laddha");
    // Check if a file has been uploaded
    if(isset($_FILES['file'])) {
        // Make sure the file was sent without errors
        if($_FILES['file']['error'] == 0) {
            // Connect to the database
	$db_connection2 = null;
	    	
            $db_connection2 = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if(mysqli_connect_errno()) {
                die("MySQL connection failed: ". mysqli_connect_error());
            }
     
            // Gather all required data
            $name = $db_connection2->real_escape_string($_FILES['file']['name']);
            $mime = $db_connection2->real_escape_string($_FILES['file']['type']);
            $data = $db_connection2->real_escape_string(file_get_contents($_FILES  ['file']['tmp_name']));
            $size = intval($_FILES['file']['size']);
     		$uname=$_SESSION['views'];
            // Create the SQL query
$query="INSERT into file (name,user_name,subject,topic, mime, size, data, created) VALUES ( '".$name."','".$uname."','".$_POST['subject']."','".$_POST['topic']."','".$mime."','".$size."','".$data."',NOW());";
     
            // Execute the query
            $result = $db_connection2->query($query);
     
            // Check if it was successfull
            if($result) {
                include("upload_complete.php");
		session_destroy();
            }
            else {
                echo 'Error! Failed to insert the file'
                   . "<pre>{$db_connection2->error}</pre>";
            }
        }
        else {
            echo 'An error accured while the file was being uploaded. '
               . 'Error code: '. intval($_FILES['file']['error']);
        }
     
        // Close the mysql connection
        $db_connection2->close();
    }
    else {
        echo 'Error! A file was not sent!';
    }
     
    // Echo a link back to the main page
    ?>
     
     


