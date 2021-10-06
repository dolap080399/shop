	<?php 
		$logo = logo();
		foreach ($logo as $key => $value) {
			// code...
		
	 ?>
<label for="show_menu_reponsive" class="logo_reponsive">
			<a href="index.php"><img src="img/logo/<?php echo $value['img']; ?>
				"  alt=""></a>
</label>
<label for="show_menu_reponsive" class="bar_menu_reponsive">
	<i class="fas fa-bars"></i>
</label>
<input hidden="" type="checkbox" class="nav_input"id="show_menu_reponsive">	
<div class="container menu_0"  >
			<label for="show_menu_reponsive" class="menu_reponsive" >	
				<i class="fas fa-times"></i>
			</label>
			<div class="row ">
				<div class="col-lg-2 logo">
					<a href="index.php"><img src="img/logo/<?php echo $value['img']; ?>
						"  alt=""></a>
				</div>
				<?php } ?>
				<div class="col-lg-6 search">
					<input type="text" name="" placeholder="Tìm kiếm...">
					<button type="button" >Tìm kiếm</button>
				</div> 
				<div class=" col-lg-2 login float_right">
					<?php 
						if (isset($_SESSION['username'])) {
							
							?>
							<span class = "info" >
						<a href=""><img src="" alt=""><?php echo $_SESSION['username'];  ?></a>
						<span class="space">/</span>
						<a href="index.php?page=destroy">Đăng xuất</a>
					</span>
					<?php
						}
						else{
							echo "<a href='index.php?page=login'>Login</a>";
						}

					 ?>
					
					
				</div>
				<div class="col-lg-2 cart float_right">
					<a href="index.php?page=cart"><img src="cart.png" alt=""><sup style="color: red;">0</sup></a>

				</div>
			</div>
			<div class="row menu">
			
					<ul>
						<?php 
					$header = header_menu();	
					
					 // print_r($header);
					
					foreach ($header as $key => $value) {
						$id_header = $value['id_header'];
						

				 ?>
						<li  class="col-lg-2 col-md-4 col-sm-6 col-12" onclick="show_menu_1_1();">
							<a href="#"><?php echo $value['name_header']; ?></a>
							<?php 
								$menu = menu();
								?>
							<div class="row">
								<ul class="menu_1_1 ">
									<?php 
										foreach ($menu as $key => $value) {
									// code...
									if ($value['id_header']==$id_header) {
										// code...
									
									 ?>
									<li>
										<a href="	"><?php echo $value['name_product_type']; ?></a>
									</li>
								<?php } } ?>
								</ul>
							</div>
						</li>
						<!-- <li  class="col-lg-2 col-md-4 col-sm-6 col-12"onclick="show_menu_1_1();">
							<a href="# 
							">Quần nam</a>
							<div class="row">
								<ul class="menu_1_1 ">
									<li>
										<a href="	">Quần Jean Nam</a>
									</li>
									<li>
										<a href="	">Quần Vải Nam</a>
									</li>
									<li>
										<a href="	">Quần Short Nam</a>
									</li>
									<li>
										<a href="	">Quần Jogger</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li  class="col-lg-2 col-md-4 col-sm-6 col-12">
							<a href="">Phụ kiện</a>
							<div class="row">
								<ul class="menu_1_1 ">
									<li>
										<a href="	">Túi / Balo Nam</a>
									</li>
									<li>
										<a href="	">Mũ Nam</a>
									</li>
									<li>
										<a href="	">Kính Nam</a>
									</li>
									<li>
										<a href="	">Giày Dép Nam</a>
									</li>
									<li>
										<a href="	">Thắt Lưng Nam</a>
									</li>
									<li>
										<a href="	">Tất Nam</a>
									</li>
									
								</ul>
							</div>
						</li> -->
						<?php } ?>
					</ul>
				
			</div>
		</div>