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
	<h1><center>Your Response has been recorded to HostelCafe.</center></h1>
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
	<img src="subs.jpg" style="width: device-width" height="50%; border:10px solid white;"></center>
	
	
	<center><a href="../index.html"><button  style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
		cursor: pointer;"> <h3>BACK</h3></button></a></center>
	</body></html>

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