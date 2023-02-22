<!DOCTYPE html>
<html>
<head>
	<title>Reverse and Sum of Digits</title>
</head>
<body>
	<h1>Reverse and Sum of Digits</h1>
	<form method="post">
		<label for="number">Enter a number:</label>
		<input type="text" id="number" name="number"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$number = $_POST['number'];

		if (!is_numeric($number) || strpos($number, '.') !== false || strpos($number, ',') !== false) {
			echo "<p style='color:red;'>Please enter a valid integer.</p>";
		} else {
			$reversed_number = strrev($number);
			$sum = 0;
			$digit_count = 0;

			for ($i = 0; $i < strlen($reversed_number); $i++) {
				$digit = $reversed_number[$i];
				$sum += $digit;
				$digit_count++;
			}

			$average = $sum / $digit_count;

			echo "<p>Reversed number: $reversed_number</p>";
			echo "<p>Sum of digits: $sum</p>";
			echo "<p>Average of digits: $average</p>";
		}
	}
	?>
</body>
</html>
