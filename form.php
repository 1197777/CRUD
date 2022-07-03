<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Booking</title>
	<link rel="stylesheet" href="css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>

<body>
<form action="book.php" method="post" class="book-form">

	<div class="wrapper">


		<div class="container">
			<div class="container-time">
				
			</div>

			<div class="container-form">
				<form action="book.php">
					<h2 class="heading heading-yellow">Reis Boeken</h2>

					<div class="form-field">
						<p>Naam</p>
						<input type="text" placeholder="Naam..." name="naam">
					</div>
					<div class="form-field">
						<p>Email</p>
						<input type="email" placeholder="Email..." name="email">
					</div>
					<div class="form-field">
						<p>Startdatum</p>
						<input type="date">

					</div>
					<div class="form-field">
						<p>Einddatum</p>
						<input type="date">
					</div>
					<div class="form-field">
						<p>Bestemming</p>
						<select name="select" id="#">
							<option value="1">Alle Bestemmingen...</option>
							<option value="2">Spanje</option>
							<option value="3">Frankrijk</option>
							<option value="4">Duitsland</option>
							<option value="5">Italië</option>
							<option value="6">Griekenland</option>
							<option value="7">Turkije</option>
							<option value="8">Verenigde Arabische Emiraten</option>
							<option value="9">Qatar</option>
							<option value="10">Oman</option>
							<option value="11">Egypte</option>
							<option value="12">Amerika</option>
							<option value="13">Canada</option>
							<option value="14">Mexico</option>
							<option value="15">Australië</option>
							<option value="16">Nieuw-Zeeland</option>
							<option value="17">Brazilië</option>
							<option value="18">Argentinië</option>
							<option value="19">Suriname</option>
							<option value="20">Colombia</option>
							<option value="21">Peru</option>
							<option value="22">China</option>
							<option value="23">Thailand</option>
							<option value="24">Japan</option>
							<option value="25">India</option>
							<option value="26">Bali</option>
							<option value="27">Kenia</option>
							<option value="28">Algerije</option>
							<option value="29">Madagaskar</option>
							<option value="30">Zuid-Afrika</option>
							<option value="31">Marokko</option>
						</select>
					</div>

					<button class="btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
	</from>

</body>

</html>