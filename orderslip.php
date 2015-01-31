
<?php

include "connect.php";
include "head.php";

session_start();
$_SESSION['fplanid'] = $_GET['fplanid'];
?>
	<div id="orderslip" style="width:420px">

			<?php
				include "orderslipbare.php";	
			?>

	</div>

	<div class="column" id="rightcol" style="height: 400px;">
						<?php include "ordersumm.php"; ?>
	</div>


	<a href="payment.php"><div class="button" id="checkout" style="margin-right: 140px; border: 0px; border-radius: 15px; background: #fe7105; background-image: linear-gradient(to bottom, #fe7105, #e41505); font-family: 'Century Gothic'; padding-top: 5px;">Checkout</div></a>
<?php
include "footer.php"
?>