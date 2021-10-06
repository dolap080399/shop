<div class="container main">
<div class="product_new">
				<h3><a href="">Sản Phẩm Mới</a></h3>
				<?php 
					$product_hot = product_new();
					foreach ($product_hot as $key => $value) {
						// code...
						$price_new =(($value['price_product'])-((($value['price_product'])*($value['price_sale']))/100));
				 ?>
				<div class="card product" style="width: 18rem;">
					<img src="img/product/<?php echo $value['img_product']; ?>" class="card-img-top" alt="...">
					<div class="info_product">
						<p class="title_main_product"><?php echo $value['name_product']; ?></p>
						<p class="price_main_product price_old"><?php echo number_format($value['price_product']); ?> vnđ</p>
						<p class="price_main_product price_new"><?php echo number_format (ceil($price_new)); ?>vnđ</p>
						<p class="price_sale">giảm <?php echo $value['price_sale'] ;?>% </p>
					</div>
					<div class="card-body">
						<span class="quick_purchase">Mua Ngay</span>
						<input type="checkbox" name="" id ="check_detail">
						<label for="check_detail">Xem Chi Tiết
						</label>
	  				</div>
				</div>
				
			<?php } ?>

			</div>
			<div class="product_sale">
				<h1><a href="">Sản Phẩm Sale</a></h1>
				<?php 
					$product_sale = product_sale();
					foreach ($product_sale as $key => $value) {
						// code...
						$price_new =(($value['price_product'])-((($value['price_product'])*($value['price_sale']))/100));
				 ?>
					<div class="card product" style="width: 18rem;">
					<img src="img/product/<?php echo $value['img_product']; ?>" class="card-img-top" alt="...">
					<div class="info_product">
						<p class="title_main_product"><?php echo $value['name_product']; ?></p>
						<p class="price_main_product price_old"><?php echo number_format($value['price_product']); ?> vnđ</p>
						<p class="price_main_product price_new"><?php echo number_format (ceil($price_new)); ?>vnđ</p>
						<p class="price_sale">giảm <?php echo $value['price_sale'] ;?>% </p>
					</div>
					<div class="card-body">
						<button class="btn-danger">Mua Ngay</button>
						<button class="btn-info">Xem Chi Tiết</button>
	  				</div>
				</div>
				<?php 	} ?>
			</div>
	</div>