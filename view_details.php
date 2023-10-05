<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Yuvraj Jindal">
        <meta name="description" content="A simple webpage that stores the information required for opening a Bank Account">
        <title>ICICI Bank Limited</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    </head>
	
	<body>
		<header>
			<?php
					include("includes/global-header-nav.php");
			?>
			<img src="images/header.jpg" alt="ICICI Bank Logo" class="logo">
		</header>

		<main class="details">
			<div class="container">
				<div class="row">
					<table class="table">
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<th>ID No.</th>
							<th>Phone Number</th>
							<th>Employment Status</th>
							<th>Annual Income</th>
							<th>Account Type</th>
							<th>Usage Purpose</th>
							<th>Address</th>
						</tr>

						<?php

							while($r = mysqli_fetch_assoc($res)){
						?>
								<tr>
									<td><?php echo $r['Title'] . " " .$r['fname'] . " " . $r['lname']; ?></td>
									<td><?php echo $r['Email']; ?></td>
									<td><?php echo $r['Government_ID']; ?></td>
									<td><?php echo $r['Phone_Number']; ?></td>
									<td><?php echo $r['Employment_Status']; ?></td>
									<td><?php echo $r['Annual_Income']; ?></td>
									<td><?php echo $r['Account_Type']; ?></td>
									<td><?php echo $r['Purpose']; ?></td>
									<td><?php echo $r['Mailing_Address']; ?></td>
								</tr>
							<?php
								}
							?>
					</table>
				</div>
			</div>
		</main>

		<footer>
			<?php
				include("includes/global-footer-nav.php");
			?>
		</footer>
	</body>
</html>
