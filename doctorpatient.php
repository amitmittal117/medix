<html>
<head>

<?PHP
	session_start();
	include 'doctornav.php';
	include 'conn.php';
	$doctor_email_id=$_SESSION['doctor_email_id'];
	$patient_aadhaar=$_GET["patient_aadhaar"];
	$illiness=$_GET["illiness"];
	$str="SELECT * FROM personaldetail WHERE aadhaar_id = '".$patient_aadhaar."'";
		$records = mysql_query($str);
		$aadhaar_id=0;
		while($row = mysql_fetch_array($records))
		{
			$aadhaar_id = $row['aadhaar_id'];
			$base_password=$row['password'];
			$aadhaar_first_name=$row['aadhaar_first_name'];
			$aadhaar_last_name=$row['aadhaar_last_name'];
			$dateofbirth = $row['aadhaar_date_of_birth'];
			$monthofbirth = $row['aadhaar_month_of_birth'];
			$yearofbirth = $row['aadhaar_year_of_birth'];
			$gender = $row['aadhaar_sex'];
			$address = $row['aadhaar_address'];
			$city = $row['aadhaar_city'];
			$state = $row['aadhaar_state'];
			$pincode = $row['aadhaar_pin_code'];
			$email = $row['email'];
			$mobileno = $row['mobileno'];
			$emergencyno = $row['emergencyno'];
			$weight = $row['weight'];
			$height = $row['height'];
			$blood_group = $row['blood_group'];
			
		}
		$_SESSION["aadhaar"] = $aadhaar_id;
		if($gender=='m'||$gender=='M')
		{
			$gender="Male";
		}
		else
		{
			$gender="Female";
		}
		$aadhaar_first_name=ucfirst($aadhaar_first_name);
		$aadhaar_last_name=ucfirst($aadhaar_last_name);
		
?>
</head>
<body class="parallax">
	<div style="padding:20px 0px 0px 0px;"/>
	<div class="container" style="background:white;opacity:0.88;padding:0px 0px 0px 50px;">
		 <div class="row">
			<div class="input-field col s5" >
				<input id="date" type="date">
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10" >
				<textarea id="textarea" required class="materialize-textarea" name="my_text"></textarea>
				<label for="textarea">Prescription</label>
			</div>
		</div>
		<div class="row">
	</div>
	<div style="padding:20px 0px 0px 0px;"/>
	<div class="container" style="background:white;opacity:0.88">
		<div class="container" style="background:white; paddig:20px 0px 1px 20px;">
	<br/>
		
		<fieldset style="width: 50%; padding: 50px; margin: 50px 0px 160px 220px"><legend>Patient Details</legend>
                       <table class="tg" align="center">
							<tr><td class="tg-rmb8">Aadhaar Id:<br></br></td><td class="tg-rmb8"><?php echo $aadhaar_id;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Name:<br></br></td><td class="tg-yw4l"><?php echo $aadhaar_first_name." ".$aadhaar_last_name;?><br></br></td></tr>
							<tr><td class="tg-rmb8">D.O.B.:<br></br></td><td class="tg-rmb8"><?php echo $dateofbirth."/".$monthofbirth."/".$yearofbirth;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Gender:<br></br></td><td class="tg-yw4l"><?php echo $gender;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Address:<br></br></td><td class="tg-rmb8"><?php echo $address;?><br></br></td></tr>
							<tr><td class="tg-rmb8">City:<br></br></td><td class="tg-rmb8"><?php echo $city;?><br></br></td></tr>
							<tr><td class="tg-rmb8">State:<br></br></td><td class="tg-rmb8"><?php echo $state;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Pincode:<br></br></td><td class="tg-rmb8"><?php echo $pincode;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Email:<br></br></td><td class="tg-yw4l"><?php echo $email;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Contact Number:<br></br></td><td class="tg-rmb8"><?php echo $mobileno;?><br></br></td></tr> 
							<tr><td class="tg-yw4l">Emergency Number:<br></br></td><td class="tg-yw4l"><?php echo $emergencyno;?><br></br></td></tr> 
							<tr><td class="tg-rmb8">Weight:<br></br></td><td class="tg-rmb8"><?php echo $weight;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Height:<br></br></td><td class="tg-yw4l"><?php echo $height;?><br></br></td></tr> 
							<tr><td class="tg-rmb8">Bloog Group:<br></br></td><td class="tg-rmb8"><?php echo $blood_group;?><br></br></td></tr>
						</table>
        </fieldset>
		<br />
	</div>
	</div>
<!-- Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
</body>
</html>
