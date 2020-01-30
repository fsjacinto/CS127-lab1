<?php
	$msg = 'Invalid Username/Password';
	if (isset($_POST['Submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
			$_SESSION['valid'] = true;
			$_SESSION['timeout'] = time();
		}
		else {
			header( 'location: login.php?msg=failed' );
		}
	}
?>

<!DOCTYPE html>
<html>
</style>
<head>
	<title>Applicants</title>
	<link href="style3.css" rel="stylesheet" type= "text/css">
</head>
<body>
	<div class="all">
	<div class="title">
		<h1>Applicants</h1>
	</div>
	<?php
		//Connect to MySQL Database
       include("config.php");
	   
	   $sql1 = "SELECT csid, lastn, firstn, middlen FROM personal1";
       $result = $conn->query($sql1); ?>
	   
       <table align="center"> <tr> <thead>
       	  <th> Name </th>
       </thead> </tr>
	   
	   <?php
       if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) { 
        	?>
			<tr><td>
			<?php echo "<a href=\"applicants.php?csid=$row[csid]\">"?><?php echo $row['lastn'], ", ", $row['firstn'], " ", $row['middlen']?> 
			
            <?php echo "<td bgcolor=\"white\"><a href=\"delete.php?csid=$row[csid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  ?>
			
			<?php 
         }   	
  	   } else echo "Database is empty"; 
        $conn->close(); 
    ?>
	</table>
	</div>
	<div class="buttons">
		<a href="Home.html">Back</a>
	</div>
	<div class="banner">
		<video autoplay muted loop id="bg">
			<source src="videos/bg.mp4" type="video/mp4">
			<script>
				document.getElementById("bg").play();
			</script>
		</video>
	</div>
</body>			
</html>