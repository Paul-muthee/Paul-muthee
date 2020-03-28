<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/auth.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Glo Cstore Admin</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Glo Cstore</a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['email']; ?></a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
								
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
								
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				      	
								</ul>
				</li>

				<li class="second w3l_search">
				 
				
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div class="agile_top_w3_grids">
					          <ul class="ca-menu">
									<li>
										<a href="manage_orders.php">
											
											<i class="fa fa-shopping-cart fa-spin" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main">
                                                   <?php 
                                                    $query = "SELECT count(*) as total from orders_";
                                                    $result = mysqli_query($con, $query);
                                                    confirm_query($result);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['total'];
                                                    ?>
                                                </h4>
												<h3 class="ca-sub one">Placed Orders</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="manage_users.php">
										  <i class="fa fa-group fa-spin" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one">
												       <?php 
                                                    $query = "SELECT count(*) as total from admin";
                                                    $result = mysqli_query($con, $query);
                                                    confirm_query($result);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['total'];
                                                ?>           

                                                </h4>
												<h3 class="ca-sub">Users</h3>

											</div>
										</a>
									</li>
					
									<li>
										<!-- <a href="manage_payments.php"> -->
											<i class="fa fa-money" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three">49,436</h4>
												<h3 class="ca-sub three">Payments</h3>
											</div>
										</a>
									</li>
										<!-- <li>
										<a href="#">
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four">30,808</h4>
												<h3 class="ca-sub four">New Orders</h3>
											</div>
										</a>
									</li> -->
									<div class="clearfix"></div>
								</ul>
					   </div>
					 <!-- //agile_top_w3_grids-->
						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">
							       <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Latest Report</h3>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">65,800,587 </h4><span class="year">Total Properties</span></div>
													<div class="year-info"><p class="text-no">20 </p><span class="year">This Year</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">2,690 </h4><span class="year">Total Properties</span></div>
													<div class="year-info"><p class="text-no">40 </p><span class="year">This Month</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">24,660 </h4><span class="year">Total Properties</span></div>
													<div class="year-info"><p class="text-no">30 </p><span class="year">This Week</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">1,204</h4><span class="year">Total Properties</span></div>
													<div class="year-info"><p class="text-no">10 </p><span class="year">This Day</span></div>
													<div class="clearfix"></div>
												</div>
											  
											</div>
									   </div>
									    <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
										    <div class="img_wthee_post1">
											<h3 class="w3_inner_tittle"> Hours Working</h3>
										       	<div class="main-example">
													<div class="clock"></div>
													<div class="message"></div>

												</div>
											</div>
							            </div>
								       <div class="clearfix"></div>
							     </div>
								   

						 <!--/prograc-blocks_agileits-->
							<div class="prograc-blocks_agileits">
								
								
								 <div class="col-md-6 bars_agileits agile_info_shadow">
								   <h3 class="w3_inner_tittle two">Daily Sales</h3>
										<div class='bar_group'>
												<div class='bar_group__bar thin' label='Ratings' show_values='true' tooltip='true' value='440'></div>
												<div class='bar_group__bar thin' label='New Customers' show_values='true' tooltip='true' value='235'></div>
												<div class='bar_group__bar thin' label='New Spares' show_values='true' tooltip='true' value='500'></div>
												<div class='bar_group__bar thin' label='Spares Out' show_values='true' tooltip='true' value='456'></div>
										</div>
								</div>
								<div class="col-md-6 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Recent Ordes</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>#</th>
															  <th>Phone</th>
															  <th>Address</th>                                    
                                                               <th>Drink</th>															 									
															  
														  </tr>
													  </thead>
													  <tbody>
                                                      <?php
                                                            $count = 1;
                                                            $sel_query = "SELECT * FROM orders_  ORDER BY order_id Asc; ";
                                                            $result = mysqli_query($con, $sel_query);
                                                            confirm_query($result);
                                                            while ($row = mysqli_fetch_assoc($result)) { ?>
														<tr>
                                                        <td><?php echo $count; ?></td>
														  <td><?php echo $row["phone"]; ?></td>
														  <td><?php echo $row["address"]; ?></td>                                 																					 
														  <td><span><?php echo $row["drink"]; ?></span></td>
														 
														  <!-- <td><span class="badge badge-info">50%</span></td> -->
													  </tr>
                                                      <?php $count++;
                                                                    } ?>
													 
												  </tbody>
											  </table>
											</div>
										</div>											
								</div>
									 <div class="clearfix"></div>
							</div>


												<!-- /weather_w3_agile_info-->
						<div class="weather_w3_agile_info agile_info_shadow">
						  <div class="weather_w3_inner_info">
						      
							     <div class="over_lay_agile">
								  <h3 class="w3_inner_tittle">Weather Report</h3>
						       	  <ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THU</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="cloudy" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SAT</h4>
											<h5>15 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="fog" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SUN</h4>
											<h5>11 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								</div>
							</div>	
						</div>
						<!-- //weather_w3_agile_info-->
						
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?>Glo Cstore All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>



	<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>