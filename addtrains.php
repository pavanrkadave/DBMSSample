<?php

$mysqli = new mysqli('localhost','root','','collegedb');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$trainno = $mysqli->real_escape_string($_POST['trainno']);
		$name = $mysqli->real_escape_string($_POST['name']);
		$type = $mysqli->real_escape_string($_POST['type']);
		$fromst = $mysqli->real_escape_string($_POST['fromst']);
		$tost = $mysqli->real_escape_string($_POST['tost']);
				
			    $sql = "INSERT INTO trains (trainno,name,type,fromst,tost)" . "VALUES ('$trainno','$name','$type','$fromst','$tost')";
				//If the query is successful redirect to welcome.php,done!
				if($mysqli->query($sql) == true){
					echo '<script language="javascript">';
                    echo 'alert("Successfully inserted the Train '.$name.'"); location.href="index.php"';
                    echo '</script>';
				} else{
					echo '<script language="javascript">';
                    echo 'alert("Train Cannot Be Added"); location.href="index.php"';
                    echo '</script>';						
				}
			}		
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Database Home Page</h1>
	<h2>Enter a Train to store</h2>
    <form class="form" action="addtrains.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Train Number" name="trainno" required />
      <input type="text" placeholder="Train Name" name="name" required />
	  <input type="text" placeholder="Train Type" name="type" required />
	  <input type="text" placeholder="From Station" name="fromst" required />
	  <input type="text" placeholder="To Station" name="tost" required />
      <input type="submit" value="Save" name="register" class="btn btn-block btn-primary" />
	</form>
  </div>
</div>