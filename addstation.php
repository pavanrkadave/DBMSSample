<?php

$mysqli = new mysqli('localhost','root','','collegedb');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$sid = $mysqli->real_escape_string($_POST['sid']);
		$sname = $mysqli->real_escape_string($_POST['sname']);
				
			    $sql = "INSERT INTO station (sid,sname)" . "VALUES ('$sid','$sname')";
				//If the query is successful redirect to welcome.php,done!
				if($mysqli->query($sql) == true){
					echo '<script language="javascript">';
                    echo 'alert("Successfully inserted the Station '.$sname.'"); location.href="index.php"';
                    echo '</script>';
				} else{
					echo '<script language="javascript">';
                    echo 'alert("Station Cannot Be Added"); location.href="index.php"';
                    echo '</script>';						
				}
			}		
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Database Home Page</h1>
	<h2>Enter a Station to store</h2>
    <form class="form" action="addstation.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Station ID" name="sid" required />
      <input type="text" placeholder="Station Name" name="sname" required />
      <input type="submit" value="Save" name="register" class="btn btn-block btn-primary" />
	</form>
  </div>
</div>