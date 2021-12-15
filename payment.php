<?php
session_start();
?>
<?php if (isset($_SESSION['result'])) {
	if ($_SESSION['result'] == 1) {
		echo '<script> alert("Successful") </script>';
	} else {
		echo '<script> alert("Failed") </script>';
	}
	unset($_SESSION['result']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="SStyle.css">

</head>

<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
		<a href="#" class="navbar-brand"> Tour Management system </a>
		<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item"><a href="profile.php" class="nav-link "> PROFILE </a></li> -->
			<li class="nav-item"><a href="logout.php" class="nav-link "> LOGOUT </a></li>




		</ul>


	</nav>


	<section class="Post_holder1 d-flex justify-content-center align-items-center">
		<form class="Post_form p-4" action="control/postCheck.php" method="POST">


			<form action="post.php" method="POST" class="post-form">
				<table>
					<tr>
						<th>
							<h1 style="margin-bottom: 25px"><label for="">Payment</label></h1>
						</th>
					</tr>
				</table>

				<table>
					<tr>
						<td>
							<label for="">Online Payment Method :</label>

							<div class="d-flex flex-colunm ">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="method" id="exampleRadios1" value="BDTK" checked>
									<label class="form-check-label" for="exampleRadios1">
										Bkash
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="method" id="exampleRadios1" value="BDTK" checked>
									<label class="form-check-label" for="exampleRadios1">
										nagad
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="method" id="exampleRadios1" value="Others" checked>
									<label class="form-check-label" for="exampleRadios1">
										Others
									</label>
								</div>
							</div>
						</td>
					</tr>
				</table>
				</br>
				<table>

					
				</table>
				</br>
				<table>

					<tr>
						<td><label for="">Pay by card:</label>
							<select name="prefIns">
								<label for="">
									<option value="MTB">MTB</option>
								</label>
								<label for="">
									<option value="MTB">MTB</option>
								</label>
								<label for="">
									<option value="DBBL">DBBL</option>
								</label>
								<label for="">
									<option value="OTHERS">OTHERS</option>
								


							</select>
						</td>

					</tr>
				</table>
				</br>
				<table>
					<tr>
						<td>
							<label for="">Total amount: </label>
							<input type="amount" id="Preferable amount " name="total amount">
						</td>
					</tr>
				</table>
				</br>
				<table>
					<tr>
					</tr>
				</table>
				</br>
				<table>
					<tr>
						<th><button type="submit" style="transform:translate(300%,-40%)" name="submit">Pay</button></th>
					</tr>
					<tr>
						<th>
							<span>

							</span>
						</th>
					</tr>
				</table>

			</form>





			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>