<html>
	<head>
	<style>
		#feedback {display: none; background: #000000 ;}
		#newsletter {display: none;background: #000000;}
	</style>
	    <script>
			function function1()
			{
				 var x = document.getElementById("feedback");
    
         x.style.display = "block";
							var y = document.getElementById("newsletter");
    
         y.style.display = "none";
						 
			}
			function function2()
			{
				 var x = document.getElementById("feedback");
    
         x.style.display = "none";
							var y = document.getElementById("newsletter");
    
         y.style.display = "block";
						 
			}
		</script>
	</head>
<body style="background: #FECE1A">
	
	
	<button onClick="function1()"   style="background: #037404; color: #FFFEFF; width: 250px; height: 50px";>feedback</button>
	<button onClick="function2()" style="background: #05286B; color: #FFFEFF; width: 250px; height: 50px">newsletter</button>
<div id="feedback">
	<center><h1 style="color:#FFFFFF">People who gave feedback.</h1></center>
<?php
$con=mysqli_connect("localhost","root","vivekygkp","hostelcafe");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM feedback");

echo "<table border='1' width='100%' style='color:white'>
<tr>
<th>Name</th>
<th>Email</th>
<th>comment</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
<div id="newsletter">
	
	<center><h1 style="color: #FFFFFF">People who subscribed to our newsletter.</h1></center>
	<?php
	$result = mysqli_query($con,"SELECT * FROM newsletter");

echo "<table border='1' style='color:white' width='100%'>
<tr>
<th>Email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
	</div></body></html>	
	