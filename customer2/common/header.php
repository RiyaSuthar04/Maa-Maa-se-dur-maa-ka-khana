<?php
$id=$_SESSION['uid'];
?>

<div class="header">
				<!-- Topbar -->
				<div class="header_topbar dark">
					<div class="container">
						<div class="row">
						
							<div class="col-lg-6 col-md-6 col-sm-6 col-4">
								<ul class="tp-list nbr ml-2">
									<li class="dropdown dropdown-currency hidden-xs hidden-sm">
										<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eng<i class="ml-1 fa fa-angle-down"></i></a>
										<ul class="dropdown-menu mlix-wrap">
											<li><a href="javascript:void(0);">English</a></li>
											<li><a href="javascript:void(0);">Hindi</a></li>
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
									</ul>
								</div>
							</div>
						
						</div>
					</div>
				</div>
				
				<!-- Main header -->
				<div class="general_header">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-2 col-md-2 col-sm-3 col-4">
								<a class="nav-brand" href="#">
									<img src="assets/img/logo-color.png" class="logo" alt="" height="100"  width="100%" />
								</a>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-4 col-3">
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
							
							<div class="col-lg-3 col-md-3 col-sm-5 col-5">
								<div class="general_head_right">
									<ul>
										<li><a data-toggle="collapse" href="#mySearch" role="button" aria-expanded="false" aria-controls="mySearch"><i class="ti-search"></i></a></li>
										<li><a href="account-info.php"><i class="ti-user"></i></a></li>
										<li><a href="add-to-cart.php"><i class="ti-shopping-cart"></i><span class="cart_counter">
										<?php 
										$select=$conn->query("SELECT * FROM cart2 where cid='$id'");
										$row_count=mysqli_num_rows($select);
										?>
										<?php echo $row_count;?>
										</span></a></li>
									</ul>
								</div>
								<div class="collapse" id="mySearch">
									<div class="blocks search_blocks">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search entire store here...">
											<div class="input-group-append">
											<button class="btn search_btn" type="button"><i class="ti-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>