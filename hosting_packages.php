<?php

$product_array = $db_handle->runQuery("SELECT * FROM `hosting_packages` ORDER BY code ASC");
if (!empty($product_array)) {
	foreach ($product_array as $key => $value) {
?>
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
			<!-- Block2 -->
			<div class="block2 bg-dark">
				<div class="card bg-dark">
					<div class="card-body">
						<div class="block2-txt p-t-20 ">
							<form id="frmCart">
								<p class="block2-name dis-block s-text2 text-white p-b-5">
									<?php echo $product_array[$key]["product_name"]; ?>
								</p>
								<span class="block2-name dis-block s-text8 p-b-5 bg-info">
								</span>
								<br />
								<p class="block2-name dis-block text-white s-text6 p-b-5">
									Disk Space : &nbsp; <?php echo $product_array[$key]["disc_space"]; ?>
								</p>
								<p class="block2-name dis-block text-white s-text6  p-b-5">
									MailBoxes : &nbsp; <?php echo $product_array[$key]["mail_boxes"]; ?>
								</p>
								<p class="block2-name dis-block text-white s-text6  p-b-5">
									Databases : &nbsp; <?php echo $product_array[$key]["databases_number"]; ?>
								</p>
								<p class="block2-name dis-block text-white s-text6  p-b-5">
									Parked Domains : &nbsp; <?php echo $product_array[$key]["parked_addons_domains"]; ?>
								</p>
								<p class="block2-name dis-block text-white s-text6  p-b-5">
									Solid State Drives : &nbsp;<?php echo $product_array[$key]["solid_state_drive"]; ?>
								</p>
								<p class="block2-name dis-block text-white s-text6  p-b-5">
									SitePad : &nbsp; <?php echo $product_array[$key]["site_pad"]; ?>
								</p>
								<h2 class="block2-name dis-block text-white s-text6  p-b-5">
									R <?php echo $product_array[$key]["price_per_month"]; ?> Per Month
								</h2>
								<h2 class="block2-name dis-block text-white s-text6  p-b-5">
									R<?php echo $product_array[$key]["price_per_year"]; ?> Per Year
								</h2>
								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
											<input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Update Cart" class="flex-c-m size4 bg-info bo-rad-23 hov1 s-text1 trans-0-4" onClick="cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" />
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-dark">
				<br />
				<p class="Text text-center text-secondary">Quantity :
					<input type="number" class="bg-secondary form-control" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" />
				</p>
				</form>
			</div>
		</div>
<?php
	}
}
?>