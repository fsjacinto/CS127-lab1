<?php
	include("config.php");

	//Value Assignment for Personal Information(from surname to citizenship)
	$lastn = $_POST['lastn'];
	$firstn = $_POST['firstn'];
	$extname = $_POST['extname'];
	$middlen = $_POST['middlen'];
	$birthdate = $_POST['birthdate'];
	$birthplace = $_POST['birthplace'];
	$sex = $_POST['sex'];
	$civilstatus = $_POST['civilstatus'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$bloodtype = $_POST['bloodtype'];
	
	$gsis = $_POST['gsis'];
	$pagibig = $_POST['pagibig'];
	$philhealth = $_POST['philhealth'];
	$sss = $_POST['sss'];
	$tin = $_POST['tin'];
	$agencyno = $_POST['agencyno'];
	$citizenship = $_POST['citizenship'];
	
	$sql1 = "INSERT INTO personal1 (lastn, firstn, extname, middlen, birthdate, birthplace, sex, civilstatus, height, weight,    bloodtype, gsis, pagibig, philhealth, sss, tin, agencyno, citizenship)
	VALUES ('$lastn', '$firstn', '$extname', '$middlen', '$birthdate', '$birthplace', '$sex', 
	   '$civilstatus', '$height', '$weight', '$bloodtype', '$gsis', '$pagibig', '$philhealth', '$sss', '$tin', '$agencyno', 
	   '$citizenship')";
	
	//Value Assignment for Personal Information(from residential address to email address)
	$rhousenum = $_POST['rhousenum'];
	$rstreet = $_POST['rstreet'];
	$rsubdi = $_POST['rsubdi'];
	$rbrgy = $_POST['rbrgy'];
	$rcity = $_POST['rcity'];
	$rprov = $_POST['rprov'];
	$rzip = $_POST['rzip'];
	
	$phousenum = $_POST['phousenum'];
	$pstreet = $_POST['pstreet'];
	$psubdi = $_POST['psubdi'];
	$pbrgy = $_POST['pbrgy'];
	$pcity = $_POST['pcity'];
	$pprov = $_POST['pprov'];
	$pzip = $_POST['pzip'];
	
	$telnum = $_POST['telnum'];
	$mobnum = $_POST['mobnum'];
	$email = $_POST['email'];
	
	$sql2 = "INSERT INTO personal2 (rhousenum, rstreet, rsubdi, rbrgy, rcity, rprov, rzip, phousenum, pstreet, psubdi, pbrgy, pcity, pprov, pzip, telnum, mobnum, email)
	VALUES ('$rhousenum', '$rstreet', '$rsubdi', '$rbrgy', '$rcity', '$rprov', '$rzip', 
	   '$phousenum', '$pstreet', '$psubdi', '$pbrgy', '$pcity', '$pprov', '$pzip', '$telnum', '$mobnum', '$email')";
	   
	//Value Assignment for Family Background
	$slast = $_POST['slast'];
	$sfirst = $_POST['sfirst'];
	$sextname = $_POST['sextname'];
	$smiddle = $_POST['smiddle'];
	$child1 = $_POST['child1'];
	$cbirth1 = $_POST['cbirth1'];
	$child2 = $_POST['child2'];
	$cbirth2 = $_POST['cbirth2'];
	$child3 = $_POST['child3'];
	$cbirth3 = $_POST['cbirth3'];
	$child4 = $_POST['child4'];
	$cbirth4 = $_POST['cbirth4'];
	$child5 = $_POST['child5'];
	$cbirth5 = $_POST['cbirth5'];
	$flast = $_POST['flast'];
	$ffirst = $_POST['ffirst'];
	$fextname = $_POST['fextname'];
	$fmiddle = $_POST['fmiddle'];
	$mlast = $_POST['mlast'];
	$mfirst = $_POST['mfirst'];
	$mmiddle = $_POST['mmiddle'];
	
	$sql3 = "INSERT INTO family (slast, sfirst, sextname, smiddle, child1, cbirth1, child2, cbirth2, child3, cbirth3, child4, cbirth4, child5, cbirth5, flast, ffirst, fextname, fmiddle, mlast, mfirst, mmiddle)
	VALUES ('$slast', '$sfirst', '$sextname', '$smiddle', '$child1', '$cbirth1', '$child2', 
	   '$cbirth2', '$child3', '$cbirth3', '$child4', '$cbirth4', '$child5', '$cbirth5',	'$flast', '$ffirst', '$fextname', 
	   '$fmiddle', '$mlast', '$mfirst', '$mmiddle')";
	   
	//Value Assignment for Educational Background
	$elem = $_POST['elem'];
	$edegree = $_POST['edegree'];
	$efrom = $_POST['efrom'];
	$eto = $_POST['eto'];
	$elevel = $_POST['elevel'];
	$ehonors = $_POST['ehonors'];
	$secondary = $_POST['secondary'];
	$sdegree = $_POST['sdegree'];
	$sfrom = $_POST['sfrom'];
	$sto = $_POST['sto'];
	$slevel = $_POST['slevel'];
	$shonors = $_POST['shonors'];
	$trade = $_POST['trade'];
	$tdegree = $_POST['tdegree'];
	$tfrom = $_POST['tfrom'];
	$tto = $_POST['tto'];
	$tlevel = $_POST['tlevel'];
	$thonors = $_POST['thonors'];
	$college = $_POST['college'];
	$cdegree = $_POST['cdegree'];
	$cfrom = $_POST['cfrom'];
	$cto = $_POST['cto'];
	$clevel = $_POST['clevel'];
	$chonors = $_POST['chonors'];
	$graduate = $_POST['graduate'];
	$gdegree = $_POST['gdegree'];
	$gfrom = $_POST['gfrom'];
	$gto = $_POST['gto'];
	$glevel = $_POST['glevel'];
	$ghonors = $_POST['ghonors'];
	   
	$sql4 = "INSERT INTO educational (elem, edegree, efrom, eto, elevel, ehonors, secondary, sdegree, sfrom, sto, slevel, shonors, trade, tdegree, tfrom, tto, tlevel, thonors, college, cdegree, cfrom, cto, clevel, chonors, graduate, gdegree, gfrom, gto, glevel, ghonors)
	VALUES ('$elem', '$edegree', '$efrom', '$eto', '$elevel', '$ehonors', '$secondary', 
	   '$sdegree', '$sfrom', '$sto', '$slevel', '$shonors','$trade', '$tdegree', '$tfrom', '$tto', '$tlevel', '$thonors',
	   '$college', '$cdegree', '$cfrom', '$cto', '$clevel', '$chonors', '$graduate', '$gdegree', '$gfrom', '$gto', '$glevel', 
	   '$ghonors')";
	   
	//Value Assignment for Signature and Date
	$appsignature = $_POST['appsignature'];
	$appdate = $_POST['appdate'];  
	
	$sql5 = "INSERT INTO signdate (appsignature, appdate)
	VALUES ('$appsignature', '$appdate')";
	   
	//Success Check
	if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && 
	$conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE){
		header("Location: confirm.php");
	} 
	else{
		echo "Error creating table: " . $conn->error;
	}
	$conn->close();
?>