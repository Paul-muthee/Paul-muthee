<?php include '../includes/header.php'; ?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li id="noPrint"><a href="index.php">Home</a><span>«</span></li>
									
									<li id="noPrint">Orders</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">
<h2 class="w3_inner_tittle">Manage Orders</h2>
<!-- tables -->
        
<div class="agile-tables">
<div class="w3l-table-info agile_info_shadow">
<input type="text" id="myInput" placeholder="Search..." title="Type in  something" class="noPrint" >
<button type="button" class="btn btn-primary btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i> Print</button>


<table id="table-two-axis" class="two-axis">
<thead>
    <tr>
                        <th>Sr.no</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>D_Date</th>
                        <th>Time</th>
                        <th>Address</th>
                        <th>Bottles</th>
                        <th>Drink</th>
                        <th>D_method</th>
                        <th>Date</th>
                        <th>Complete</th>
            
                        <th></th>
                        <th></th>
    </tr>
</thead>
<tbody id="myTable">
        
<?php
                      $count = 1;
                      $sel_query = "SELECT * FROM orders_  ORDER BY order_id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>

                      <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row["name"]; ?></td>                
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["d_date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["bottles"]; ?></td>
                        <td><?php echo $row["drink"]; ?></td>
                        <td><?php echo $row["d_method"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["fullfilled"]; ?></td>
                       
                        <td id="noPrint"><a href="complete_order.php?id=<?php echo $row["order_id"]; ?>"class="btn btn-flat btn-pri btn-primary"> <i class="fa fa-pencil"></i> Fulfil</a> </td>
                        <td id="noPrint"><a href="delete_order.php?id=<?php echo $row["order_id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
                      </tr>
                       <?php $count++;
                    } ?>
                </tr>
            </tbody>
            </table>


        </div>
</div>
<!-- //tables -->

</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?> Glo Cstore. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#table').basictable();

$('#table-breakpoint').basictable({
breakpoint: 768
});

$('#table-swap-axis').basictable({
swapAxis: true
});

$('#table-force-off').basictable({
forceResponsive: false
});

$('#table-no-resize').basictable({
noResize: true
});

$('#table-two-axis').basictable();

$('#table-max-height').basictable({
tableWrapper: true
});
});
</script>
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>