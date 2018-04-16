 <?php
$servername = "localhost";
$username = "root";
$password = "vivekygkp";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['comment'];
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "INSERT INTO `hostelcafe`.`feedback` (`Name`, `Email`, `message`) VALUES ('$name', '$email', '$message');";
if ($conn->query($sql) === TRUE) {
    echo "<html><body>
	<h1><center>Your Response has been recorded.</center></h1>
	<h2><center>Thank You</center></h2>
	</body>
	
	
	</html>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?> 

<html>
<body style="background: #FECE1A">
	
	
	<center>
	<img src="subs.jpg" style="width: device-width" height="50%; border:10px solid white;"></center></body></html>

<!--if($_POST){

    $fileName = 'newsletter.txt'; //set 777 permision for this file. 
    $error = false;
    
    $email = $_POST['email'];
    
    if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
        $error = true;
    
    
    //If all ok, save emali adress in file
    if($error == false){
        $file = fopen($fileName, a);
        fwrite($file, "$email,");
        fclose($file);
        echo 'OK';
    }
}-->