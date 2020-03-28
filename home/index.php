<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glo Cstore</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Catering  Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1> Glo Cstore </h1>
	<div class="bg-agile"> 
	<div class="book-appointment">
	<?php 
			$name = $drink=$phone=$email=$time=$d_method="";
			$reg_date = $address=$d_date=$bottles="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name    = $_POST["name"];
			$drink   = $_POST["drink"];
			$address = $_POST["address"];
			$phone   = $_POST["phone"];
			$email   = $_POST["email"];
			$d_date  = $_POST["d_date"];
			$time    = $_POST["time"];
			$bottles = $_POST["bottles"];
			$d_method = $_POST["d_method"];
			$date = date("Y-m-d");
		
			}

?>		
			<div class="book-agileinfo-form">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					
					<h2 class="sub-head-w3ls"> Place an Order</h2>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="name" placeholder="Full Name" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="phone" placeholder="Phone number" required="">
						</div>
					</div>
					<div class="agileits-btm-spc form-text">
						<input type="email" name="email" placeholder="Email" required="">
					</div>

					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input id="datepicker" name="d_date" type="text" placeholder="Due Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" id="timepicker" name="time" class="timepicker form-control hasWickedpicker" placeholder="Time of Delivery" value="" onkeypress="return false;">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="address" placeholder="Pick Up location" required="">
						</div>
					</div>

					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<select name="bottles" id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="">Number of Bottles</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
											</select>
						</div>
						<div class="agileits-btm-spc form-text2">
							<select name="drink" id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="">Select  Drink</option>
												 <option value="Jameson (350 ml) "> Jameson (350 ml)  </option>
													<option value="Jameson (750 ml)"> Jameson (750 ml) </option>
													<option value="Chivas Regal 12 YO (375ml) "> Chivas Regal 12 YO (375ml)  </option>
													<option value="Royal Salute 21 YO (700 ml) "> Royal Salute 21 YO (700 ml)  </option>
													<option value="Ballantine's Finest (750 ml)"> Ballantine's Finest (750 ml) </option>
													<option value="Imperial Blue (375 ml) "> Imperial Blue (375 ml)  </option>
													<option value="Passport (750 ml) "> Passport (750 ml)  </option>
													<option value="Black & White (750 ml) "> Black & White (750 ml)  </option>
													<option value="Famous Grouse (750 ml) "> Famous Grouse (750 ml)  </option>
		    
											</select>
						</div>
					</div>
					<div class="wthree-text">
						<h6>Delivery method</h6>
						<ul class="radio-w3ls">
							<li>
								<input type="radio" id="a-option" value="pick up" name="d_method">
								<label for="a-option">For Pick up</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" value="delivery" name="d_method">
								<label for="b-option">For Delivery</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
							
						</ul>
						<div class="clear"></div>
					</div>
					
					
					<div class="clear"></div>
					<input type="submit" value="Submit">
					
					<div class="clear"></div>
				</form>
			</div>

			<?php 

if (isset($_POST["phone"])) {

    $query = "INSERT INTO orders_ (name,drink,address,phone,email,d_date,time,bottles,d_method,date)

    VALUES ('{$name}','{$drink}','{$address}','{$phone}','{$email}','{$d_date}','{$time}','{$bottles}','{$d_method}','{$date}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
            header("Location: index.php");
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                case addition failed.<a href="index.php">Try Again</a>
                </div>';
      }
      }
?>  

		</div>
		<div class="left-agileits-w3layouts-img">
			<h3>What we provide you</h3>
			<ul>
				<li><span>.</span>24x7 Food service are available</li>
				<li><span>.</span>Online Drinks Order booking</li>
			
				<li><span>.</span>Pay Cash on Delievery</li>
			</ul>
			
		</div>
		
	</div>
	<!--copyright-->
	<div class="copy-w3layouts">
		<p>&copy; 2020 Glo Cstore . All Rights Reserved			</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>