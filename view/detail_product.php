<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../boostrap/css/detail_product.css">
	<link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../boostrap/font_awesome/css/all.min.css">
	<script type="text/javascript" href="../boostrap/font_awesome/js/all.js"></script>
	<script type="text/javascript" src="../boostrap/jquery/jquery.js"></script>
	<title>Document</title>
	<!-- <script type="text/javascript">
   		function select_swap(){
   			// $(window).scroll(function(event){
   			// 	var pos_location = $('html,body').scrollTop();
   			// 	if(pos_location>20){
   			// 		$('.menu_0').addClass('fixed');
   			// 	}
   			// 	else {
   			// 		$('.menu_0').removeClass('fixed');
   			// 	}
   			// });
   			vadocument.getElementById("onclick_swap").style.display = 'block';
   		};
   	</script> -->
   	<script>
   		function click_size(){
   			document.getElementById("nav_a").style.display = 'fixed';
   			alert("h");
   		}
   	</script>
</head>
<body>
	<div class="container detail">
	<input type="checkbox"  name="" id="check">
	<label for="check" class="ovelay_detail"></label>
	<div class="detail_product">
		<input type="checkbox" hidden="" id="check_size" class="input_size">
		<label class="nav_overlay" id="nav_a" for="check_size"></label>
		<div class="select_size">
			<label for="check_size" class="icon_time">
				<i class="fas fa-times"></i>
			</label>
			
			<div>
			<img src="https://storage.googleapis.com/cdn.nhanh.vn/website/template/483/contentKey/4961/sizechuan.png" alt="">
			</div>
		</div>
		<div class="list_detail float_left">
			<ul>
				<li>
					<a href="">
						
							<img src="img/PL9259.png"  class="card-img-top" alt="...">
						
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/PL9259.png" class="card-img-top" alt="...">
						</a>
					</li>
			</ul>
		</div>
		<div class="show_detail float_left"><img src="img/PL9259.png" alt=""></div>
		<div class="detail_cart float_left">
			<h3>Tên sản phẩm</h3>
			<p>Giá sản phẩm</p>
			<div class="select-swap">
				<p>Màu sắc</p>
				<img src="img/PL9259.png" alt="">
				<div class="detail-swap" onclick="select_swap();">
					<button>Vàng<i id="onclick_swap" class="fas fa-check"></i></button>
					<button>Đỏ<i id="onclick_swap" class="fas fa-check"></i></button>
				</div>
			</div>
			<div class="size">
				<span>Size:</span>
				<br>
				<button>L</button>
				<button>XL</button>
			</div>
			<label for="check_size"class="tutorial_size" id="tutorial" onclick="click_size();">
				Hướng dẫn chọn size
			</label>
			<div class="select-quantity">
			<button>-</button>
			<input type="number" name="" >
			<button>+</button>
			</div>
			<button class="add-to-cart">Thêm vào giỏ hàng</button>
			<button class="add-quick-cart">Mua ngay</button>
		</div>
	</div>
</div>
	<!-- <div class="item"></div> -->
</body>
</html>
