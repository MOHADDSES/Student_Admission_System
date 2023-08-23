<!DOCTYPE html>
<html>
<head>
	<title>Admission Form</title>
	<style>
		body {
			background-image: url(img/images.jpg);
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.6;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 30px;
		}
		form {
			background-color: #fff;
			padding: 20px;
			max-width: 600px;
			margin: 0 auto;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="email"],
		input[type="number"],
		select {
			display: block;
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			line-height: 1.6;
		}
		select {
			height: 45px;
		}
		
		input[type="submit"]:hover {
			background-color: rgb(233, 152, 86);
			transition: background-color 0.3s ease;
            font-size: 20px;
		}
        input[type="reset"]:hover {
			background-color: rgb(233, 152, 86);
			transition: background-color 0.3s ease;
            font-size: 20px;
		}
		footer {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 20px;
			margin-top: 50px;
		}
		footer p {
			margin: 0;
		}
	</style>
</head>
<body>
	<h1>Admission Form</h1>
	
	<form action="form_insert.php" method="post">
		<label for="name">First Name</label>
		<input type="text" id="name" name="First_Name" required>

        <label for="name">Surename</label>
		<input type="text" id="name" name="Surename" required>

		<label for="email">Email Address</label>
		<input type="email" id="email" name="Email" required>

		<label for="phone">Mobile Number</label>
		<input type="number" id="phone" name="Mobile" required>

		<label for="gender">Gender</label>
		<select id="gender" name="Gender" required>
			<option value="" disabled selected>Select your gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>

		<label for="dob">Date of Birth</label>
		<input type="date" id="dob" name="Date_of_Birth" required>
        

        <br><label for="address">Address</label>
		<input type="text" id="address" name="Address" required>

        <label for="nationality">Nationality</label>
		<input type="text" id="nationality" name="Nationality" required>

		<label for="city">City</label>
		<input type="text" id="city" name="City" required>

		<label for="state">Postal</label>
		<input type="text" id="state" name="Postal" required>

		<label for="country">Country</label>
		<input type="text" id="country" name="Country" required>

		<label for="course">Department</label>
		<select id="course" name="Department" required>
			<option value="" disabled selected>Select your Department</option>
			<option value="CSE">CSE</option>
			<option value="EEE">EEE</option>
			<option value="BSTE">BSTE</option>
			<option value="ME">ME</option>
		</select>

        <label for="course">Shift</label>
		<select id="course" name="Shift" required>
			<option value="" disabled selected>Select your Shift</option>
			<option value="Day">Day</option>
			<option value="Evening">Evening</option>
			
		</select>

		<label for="term">Season</label>
		<select id="term" name="Season" required>
			<option value="" disabled selected>Select your season</option>
			<option value="summer">Summer</option>
            <option value="fall">Fall</option>
			<option value="spring">Spring</option>
		</select>

		<input type="reset" value="Reset">
        <input type="submit" value="Submit">
	</form>
	<footer>
		<p>&copy; 2023 College Admission Form. All rights reserved.Devlop By Mohaddes</p>
	</footer>
</body>
</html>
