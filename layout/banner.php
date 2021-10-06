<div class="container-fruid banner">
			<div id="carouselExampleIndicators" class="carousel slide" >
				<!-- <div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div> -->
				<div class="carousel-inner">
					<?php 	
						$banner = banner();
						foreach ($banner as $key => $value) {
					 ?>
				<div class="carousel-item active">
				  <img src="img/banner/<?php echo $value['img_banner']; ?>" class="d-block w-100" alt="...">
				</div>
				<?php } ?>
				</div>
				<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button> -->
				<!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				
				</button> -->
			</div>
		</div>