<?php

$mysqli = new mysqli('localhost','root','','demo');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$first = $mysqli->real_escape_string($_POST['first']);
		$last = $mysqli->real_escape_string($_POST['last']);
				
			    $sql = "INSERT INTO mytable (first,last)" . "VALUES ('$first','$last')";
				//If the query is successful redirect to welcome.php,done!
				if($mysqli->query($sql) == true){
					echo '<script language="javascript">';
                    echo 'alert("Successfully inserted the name"); location.href="index.php"';
                    echo '</script>';
				} else{
					echo '<script language="javascript">';
                    echo 'alert("Name Cannot Be Added"); location.href="index.php"';
                    echo '</script>';						
				}
			}		
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Database Home Page</h1>
	<h2>Enter a Name to Store</h2>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
	
      <div class="alert alert-error"></div>
	  
      <input type="text" placeholder="First Name" name="first" required />
      <input type="text" placeholder="Last Name" name="last" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
	</form>
  </div>
</div>