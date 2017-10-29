<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<title>Display Data</title>
<style type=text/css>
th {
	font-size:18px;
	color:#fff;
	padding:8px;
	border-bottom : 5px solid #f06220;
	border-left : 3px solid #f06220;
	border-right : 3px solid #f06220;
	border-top : 3px solid #f06220;
}

td {
	padding:8px;
	color:#fff;
	font-size:18px;
	border-bottom : 2px solid #f06220;
	border-left : 2px solid #f06220;
	border-right : 2px solid #f06220;
}
</style>
</head>
<body>
<div class="module">
<h1>Display Train Data</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM train_view ORDER BY number";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table>";
	echo "<tr><th>Train Name</th><th>Train Number</th><th>From Station</th><th>To Station</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>";
		echo $row["Trainname"];
		echo "</td><td>";
		echo $row["number"];
		echo "</td><td>";
		echo $row["fromstation"];
		echo "</td><td>";
		echo $row["tostation"];
		echo "</td></tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<input type="button" value="Go to Home" class="btn btn-block btn-primary" onClick="document.location.href='index.php'"/>
</div>
</body>
</html>