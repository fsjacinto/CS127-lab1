<?php
	//Connect to MySQL Database
	include("config.php");
	 
	//Get csid of the data 
	$csid = $_GET['csid'];
	
	//selecting data associated with this particular id
	$result1 = mysqli_query($conn, "SELECT * FROM personal1 WHERE csid=$csid");
	$result2 = mysqli_query($conn, "SELECT * FROM personal2 WHERE csid=$csid");
	$result3 = mysqli_query($conn, "SELECT * FROM family WHERE csid=$csid");
	$result4 = mysqli_query($conn, "SELECT * FROM educational WHERE csid=$csid");
	$result5 = mysqli_query($conn, "SELECT * FROM signdate WHERE csid=$csid");
	 
	while($res1 = mysqli_fetch_array($result1)){
		$lastn = $res1['lastn'];
		$firstn = $res1['firstn'];
		$extname = $res1['extname'];
		$middlen = $res1['middlen'];
		$birthdate = $res1['birthdate'];
		$birthplace = $res1['birthplace'];
		$sex = $res1['sex'];
		$civilstatus = $res1['civilstatus'];
		$height = $res1['height'];
		$weight = $res1['weight'];
		$bloodtype = $res1['bloodtype'];
		
		$gsis = $res1['gsis'];
		$pagibig = $res1['pagibig'];
		$philhealth = $res1['philhealth'];
		$sss = $res1['sss'];
		$tin = $res1['tin'];
		$agencyno = $res1['agencyno'];
		$citizenship = $res1['citizenship'];
	}
	
	while($res2 = mysqli_fetch_array($result2)){
		$rhousenum = $res2['rhousenum'];
		$rstreet = $res2['rstreet'];
		$rsubdi = $res2['rsubdi'];
		$rbrgy = $res2['rbrgy'];
		$rcity = $res2['rcity'];
		$rprov = $res2['rprov'];
		$rzip = $res2['rzip'];
		
		$phousenum = $res2['phousenum'];
		$pstreet = $res2['pstreet'];
		$psubdi = $res2['psubdi'];
		$pbrgy = $res2['pbrgy'];
		$pcity = $res2['pcity'];
		$pprov = $res2['pprov'];
		$pzip = $res2['pzip'];
		
		$telnum = $res2['telnum'];
		$mobnum = $res2['mobnum'];
		$email = $res2['email'];
	}
	
	while($res3 = mysqli_fetch_array($result3)){
		$slast = $res3['slast'];
		$sfirst = $res3['sfirst'];
		$sextname = $res3['sextname'];
		$smiddle = $res3['smiddle'];
		$child1 = $res3['child1'];
		$cbirth1 = $res3['cbirth1'];
		$child2 = $res3['child2'];
		$cbirth2 = $res3['cbirth2'];
		$child3 = $res3['child3'];
		$cbirth3 = $res3['cbirth3'];
		$child4 = $res3['child4'];
		$cbirth4 = $res3['cbirth4'];
		$child5 = $res3['child5'];
		$cbirth5 = $res3['cbirth5'];
		$flast = $res3['flast'];
		$ffirst = $res3['ffirst'];
		$fextname = $res3['fextname'];
		$fmiddle = $res3['fmiddle'];
		$mlast = $res3['mlast'];
		$mfirst = $res3['mfirst'];
		$mmiddle = $res3['mmiddle'];
	}
	
	while($res4 = mysqli_fetch_array($result4)){
		$elem = $res4['elem'];
		$edegree = $res4['edegree'];
		$efrom = $res4['efrom'];
		$eto = $res4['eto'];
		$elevel = $res4['elevel'];
		$ehonors = $res4['ehonors'];
		$secondary = $res4['secondary'];
		$sdegree = $res4['sdegree'];
		$sfrom = $res4['sfrom'];
		$sto = $res4['sto'];
		$slevel = $res4['slevel'];
		$shonors = $res4['shonors'];
		$trade = $res4['trade'];
		$tdegree = $res4['tdegree'];
		$tfrom = $res4['tfrom'];
		$tto = $res4['tto'];
		$tlevel = $res4['tlevel'];
		$thonors = $res4['thonors'];
		$college = $res4['college'];
		$cdegree = $res4['cdegree'];
		$cfrom = $res4['cfrom'];
		$cto = $res4['cto'];
		$clevel = $res4['clevel'];
		$chonors = $res4['chonors'];
		$graduate = $res4['graduate'];
		$gdegree = $res4['gdegree'];
		$gfrom = $res4['gfrom'];
		$gto = $res4['gto'];
		$glevel = $res4['glevel'];
		$ghonors = $res4['ghonors'];
	}
	
	while($res5 = mysqli_fetch_array($result5)){
		$appsignature = $res5['appsignature'];
		$appdate = $res5['appdate']; 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PDS Form</title>
</head>
<body>

	<p>CS Form No. 212</p>
	<p>Revised 2017</p>
	<h1>Personal Data Sheet</h1>
	
	<span>1. CS ID No.</span>
	<?php echo $csid ?>
	<br><br>
	<h3>I. PERSONAL INFORMATION</h3>
	<span>2. NAME:</span>
	<?php echo $lastn, ", ", $firstn, " ", $middlen, " ", $extname ?>
	<br><br>
	<span>3. DATE OF BIRTH:</span>
	<?php echo $birthdate ?>
	<br><br>
	<span>4. PLACE OF BIRTH:</span>
	<?php echo $birthplace ?>
	<br><br>
	<span>5. SEX:</span>
	<?php echo $sex ?>
	<br><br>
	<span>6. CIVIL STATUS:</span>
	<?php echo $civilstatus ?>
	<br><br>
	<span>7. HEIGHT(m):</span>
	<?php echo $height ?>
	<br><br>
	<span>8. WEIGHT(kg):</span>
	<?php echo $weight ?>
	<br><br>
	<span>9. BLOOD TYPE:</span>
	<?php echo $bloodtype ?>
	<br><br>
	<span>10. GSIS ID NO:</span>
	<?php echo $gsis ?>
	<br><br>
	<span>11. PAG-IBIG ID NO:</span>
	<?php echo $pagibig ?>
	<br><br>
	<span>12. PHILHEALTH NO:</span>
	<?php echo $philhealth ?>
	<br><br>
	<span>13. SSS NO:</span>
	<?php echo $sss ?>
	<br><br>
	<span>14. TIN NO:</span>
	<?php echo $tin  ?>
	<br><br>
	<span>15. AGENCY EMPLOYEE NO:</span>
	<?php echo $agencyno?>
	<br><br>
	<span>16. CITIZENSHIP:</span>
	<?php echo $citizenship?>
	<br><br>
	<span>17. RESIDENTIAL ADDRESS:</span>
	<br><br>
	<?php echo $rhousenum, " ", $rstreet, ", ", $rsubdi, ", ", $rbrgy, " ", $rcity, ", ", $rprov, " ", $rzip ?>
	<br><br>
	<span>18. PERMANENT ADDRESS:</span>
	<br><br>
	<?php echo $phousenum, " ", $pstreet, ", ", $psubdi, ", ", $pbrgy, " ", $pcity, ", ", $pprov, " ", $pzip ?>
	<br><br>
	<span>19. TELEPHONE NUMBER:</span>
	<?php echo $telnum?>
	<br><br>
	<span>20. MOBILE NUMBER:</span>
	<?php echo $mobnum?>
	<br><br>
	<span>21. EMAIL ADDRESS:</span>
	<?php echo $email?>
	<br><br>
	<h3>II. FAMILY BACKGROUND</h3>
	<span>22. NAME OF SPOUSE</span>
	<?php echo $slast, ", ", $sfirst, " ", $smiddle, " ", $sextname ?>
	<br><br>
	<span>23. NAME OF CHILDREN</span>
	<span>DATE OF BIRTH (mm/dd/yyyy)</span>
	<br><br>
	<?php echo $child1?>
	<?php echo $cbirth1?>
	<br><br>
	<?php echo $child2?>
	<?php echo $cbirth2?>
	<br><br>
	<?php echo $child3?>
	<?php echo $cbirth3?>
	<br><br>
	<?php echo $child4?>
	<?php echo $cbirth4?>
	<br><br>
	<?php echo $child4?>
	<?php echo $cbirth4?>
	<br><br>
	<span>24. FATHER'S NAME</span>
	<?php echo $flast, ", ", $ffirst, " ", $fmiddle, " ", $fextname ?>
	<br><br>
	<span>25. MOTHER'S SURNAME</span>
	<?php echo $flast, ", ", $ffirst, " ", $fmiddle ?>
	<br><br>
	<h3>III. EDUCATIONAL BACKGROUND</h3>
	<span>26. LEVEL</span>
	<span>EDUCATION/DEGREE/COURSE </span>
	<span>PERIOD OF ATTENDANCE FROM</span>
	<span>TO</span>
	<span>HIGHEST LEVEL/UNITS EARNED (if not graduated)</span>
	<span>YEAR GRADUATED</span>
	<span>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</span>
	<br><br>
	<span>ELEMENTARY</span>
	<?php echo $elem?>
	<?php echo $edegree?>
	<?php echo $efrom?>
	<?php echo $eto?>
	<?php echo $elevel?>
	<?php echo $ehonors?>
	<br><br>
	<span>SECONDARY</span>
	<?php echo $secondary?>
	<?php echo $sdegree?>
	<?php echo $sfrom?>
	<?php echo $sto?>
	<?php echo $slevel?>
	<?php echo $shonors?>
	<br><br>
	<span>VOCATIONAL / TRADE COURSE</span>
	<?php echo $trade?>
	<?php echo $tdegree?>
	<?php echo $tfrom?>
	<?php echo $tto?>
	<?php echo $tlevel?>
	<?php echo $thonors?>
	<br><br>
	<span>COLLEGE</span>
	<?php echo $college?>
	<?php echo $cdegree?>
	<?php echo $cfrom?>
	<?php echo $cto?>
	<?php echo $clevel?>
	<?php echo $chonors?>
	<br><br>
	<span>GRADUATE STUDIES</span>
	<?php echo $graduate?>
	<?php echo $gdegree?>
	<?php echo $gfrom?>
	<?php echo $gto?>
	<?php echo $glevel?>
	<?php echo $ghonors?>
	<br><br>
	<span>SIGNATURE</span>
	<?php echo $appsignature?>
	<span>DATE</span>
	<?php echo $appdate?>
	<br><br>

</body>
</html>