<!DOCTYPE html>
<html>


<head>
	<title>Your Order</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.store.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body id="checkout-page">
	<nav class="navbar navbar-expand-lg navbar-light">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="topnav">
			<a style="color:black;" class="active" href="index.html">
				<i class="fas fa-shopping-basket"></i>
				<!-- <i class="fas fa-chair-office"></i> -->
				Furniture Store
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">

			<ul class="navbar-nav ml-auto">
				</li>

				<li class="nav-item">
					<a style="color:black;" class="nav-link" href="index.html#home">Home</a>
				</li>
				<li class="nav-item">
					<a style="color:black;" class="nav-link" href="index.html#new-arrivals">Products</a>
				</li>
				<li class="nav-item">
					<a style="color:black;" class="nav-link" href="cart.html#masthread">Cart</a>

					<!-- </li>

					<li class="nav-item">
						<a style="color:black;" class="nav-link" href="#services">Our Services</a>
					</li>
					<li class="nav-item">
						<a style="color:black;" class="nav-link" href="#about">About Us</a>
					</li>


					<li class="nav-item">
						<a style="color:black;" class="nav-link" href="#contact">Contact</a>
					</li>

					<li class="nav-item">
						<a style="color:black;" class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our
							Team</a>
					</li> -->



			</ul>
		</div>
	</nav>
	<div id="site">
		<header id="masthead">
		</header>
		<div id="content">
			<h1>Your Order</h1>
			<table id="checkout-cart" class="shopping-cart">
				<thead>
					<tr>
						<th scope="col">Item</th>
						<th scope="col">Qty</th>
						<th scope="col">Price</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
			<div id="pricing">

				<p id="shipping">
					<strong>Shipping</strong>: <span id="sshipping"></span>
				</p>

				<p id="sub-total">
					<strong>Total</strong>: <span id="stotal"></span>
				</p>
			</div>

			<div id="user-details">
				<h2>Your Data</h2>
				<div id="user-details-content"></div>
			</div>

			<form action="sendm.php" method="POST" enctype="multipart/form-data">
				<label style="margin: 10px;"> Upload Just Downloaded File: </label><input type="file" id="fbtn" name="pdf" required />
				<input type="submit" id="fbt" value="submit" name="subm" />
			</form>



			<form id="paypal-form" action="" method="POST">
				<input type="hidden" name="cmd" value="_cart" />
				<input type="hidden" name="upload" value="1" />
				<input type="hidden" name="business" value="" />

				<input type="hidden" name="currency_code" value="" />

				<!-- <form action="order.php" method="POST" enctype="multipart/form-data">
					<label style="margin: 10px;"> Upload Just Downloaded File: </label><input type="file" name="pdf" required />
					<input type="submit" value="submit" name="subm" />
				</form> -->
				<!-- <label style="margin: 10px;"> Upload Just Downloaded File: </label><input type="file" name="pdf" required /> -->
				<input type="submit" id="paypal-btn" class="btn" name="place" value="Place Order" style="display: inline-block; background: #cc1400; color: #fff;
	font: 1em 'PT Serif', serif;
	padding: 0.3em 1em;
	text-align: center;
	border-radius: 4px;
	border: 1px solid #a00;" />
			</form>



		</div>



	</div>

	<footer id="site-info">
		copyright © 2022 | developed by rudresh
	</footer>
	<script>
		window.onload = function() {
			let PDFp = document.getElementById("content");
			var opt = {
				margin: 1,
				filename: 'my_order_furniture_store',
				image: {
					type: 'jpeg',
					quality: 0.98
				},
				html2canvas: {
					scale: 2
				},
				jsPDF: {
					unit: 'in',
					format: 'letter',
					orientation: 'portrait'
				}
			};

			// New Promise-based usage:
			// html2pdf().from(PDFp).set(opt).save();

			// Old monolithic-style usage:
			html2pdf(PDFp, opt);
		}



		document.getElementById("fbt").style.visibility = "hidden";



		$(document).ready(function() {
			$("#fbtn").change(function() {
				document.getElementById("fbt").click();
				alert("please.wait some time.we are conforming your order.do not click anywhere. just wait")
				// alert(document.getElementById("fbtn").value);
			});
		});

		//checking file selected or not
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
	<script>

		Email.send({
			Host: "smtp.gmail.com",
			Username: "sagardemo789@gmail.com",
			Password: "sagar@612",
			To: 'sgshinde612@gmail.com',
			From: "sagardemo789@gmail.com",
			Subject: "This is the subject",
			Body: "And this is the body"
		}).then(
			function (message) {
				alert(message);
			}
		);
	</script> -->
</body>

</html>