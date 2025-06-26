<?php

include("common/connection.php");

?>
 
 <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header">
			
				<div class="header_topbar light">
					<div class="container">
						<div class="row">
						
							<div class="col-lg-6 col-md-6 col-sm-6 col-4">
								<ul class="tp-list nbr ml-2">
									<li class="dropdown dropdown-currency hidden-xs hidden-sm">
										<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eng<i class="ml-1 fa fa-angle-down"></i></a>
										<ul class="dropdown-menu mlix-wrap">
											<li><a href="javascript:void(0);">English</a></li>
											<li><a href="javascript:void(0);">French</a></li>
											<li><a href="javascript:void(0);">Spainish</a></li>
											<li><a href="javascript:void(0);">Italy</a></li>
										</ul>
									</li>
									<li class="dropdown dropdown-currency hidden-xs hidden-sm">
										<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="ml-1 fa fa-angle-down"></i></a>
										<ul class="dropdown-menu mlix-wrap">
											<li><a href="javascript:void(0);">EUR</a></li>
											<li><a href="javascript:void(0);">AUD</a></li>
											<li><a href="javascript:void(0);">GBP</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-8">
								<div class="topbar_menu">
									<ul>
										<li><a href="order-history.php"><i class="ti-bag"></i>My Orders</a></li>
										
										<li><a href="add-to-cart.php" ><i class="ti-shopping-cart"></i><span class="cart_counter">
										<?php 
										$id=$_SESSION['uid'];
										$select=$conn->query("SELECT * FROM cart2 where cid='$id'");
										$row_count=mysqli_num_rows($select);
										?>
										<?php echo $row_count;?>
										</span></a></li>
									</ul>
								</div>
							</div>
						
						</div>
					</div>
				</div>
				
				<!-- Main header -->
				<div class="header_nav">
					<div class="container">	
						<div class="row align-item-center">
							<div class="col-lg-3 col-md-4 col-sm-8 col-10">
								<!-- For Desktop -->
								
							</div>
							
							<div class="col-lg-9 col-md-8 col-sm-4 col-2">
								<nav id="navigation" class="navigation navigation-landscape">
									<div class="nav-header">
										<div class="nav-toggle"></div>
									</div>
									<div class="nav-menus-wrapper" style="transition-property: none;">
									<ul class="nav-menu">
										
										<li class="active"><a href="home2.php">Home<span class="submenu-indicator"></span></a>
										
										</li>
										
										<li><a href="#">Category<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
											<?php
												$exe=$conn->query("select * from categories");
												while($row=$exe->fetch_object())
												{
											 ?>
											<li><a href="viewcatitem.php?editid=<?php echo $row->id; ?>&catname=<?php echo $row->cat_name; ?>"><?php echo $row->cat_name;?><span class="submenu-indicator"></span></a>	
												</li>
												<?php
													}
												  ?>
											</ul>
										</li>
										
										

										<li><a href="#">User Dashboard<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="order-history.php">Order History</a></li>
														<li><a href="account-info.php">Account Settings</a></li>
														<li><a href="feedback.php">User Feedback</a></li>
														<li><a href="contact.php">Cntact Us</a></li>
													</ul>
												</li>
										</li>
											<li><a href="logout.php">Log Out<span class="submenu-indicator"></span></a></li>
									</ul>

									</div>
								</nav>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->