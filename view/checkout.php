<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="boostrap/css/checkout.css">
	<link rel="stylesheet" href="boostrap/font_awesome/css/all.min.css">
	<script type="text/javascript" href="boostrap/font_awesome/js/all.js"></script>
	<title>Document</title>
</head>
<body>
	<div class="container checkout">
		<div class="main_checkout checkout_product">
			<div class="logo">
				<a href="index.php"><img src="logo.png" alt=""></a>
			</div>
			<div class="cart">
				<a href="">Giỏ hàng</a>
			</div>
			<div class="header_checkout">
				<h3>Thông tin giao hàng</h3>
			</div>
			<div class="name_customer">
				<input type="text" value="" placeholder="Họ và tên">
			</div>
			<div class="email_customer field_input">
				<input type="email" value="" placeholder="Email">
			</div>
			<div class="phone_customer field_input">
				<input type="text" value="" placeholder="Số điện thoại">
			</div>
			<div class="address_customer">
				<input type="text" value="" placeholder="Địa chỉ">
			</div>
			<div class="selection_address">
				<div class="selection_city float_section">
					<select id="city">
						<option>Chọn Tỉnh/Thành Phố</option>
						<option value="">Hà Nội</option>
					</select>
				</div>
				<div class="selection_distric float_section">
					<select id="distric">
						<option>Chọn Quận/Huyện</option>
						<option value="">Hà Nội</option>
					</select>
				</div>
				<div class="selection_ward">
					<select id="ward">
						<option>Chọn Phường/Xã</option>
						<option value="">Hà Nội</option>
					</select>
				</div>
				<div class="note_address">
					<textarea placeholder="Ghi chú"></textarea>
				</div>
			</div>
			<div class="payment">
					<h3>Thanh toán khi nhận hàng</h3>
					<div class="payment_methods">
						<div class="radio_pament">
							<span>		
								<i class="fas fa-dot-circle"></i>Thanh toán khi nhận hàng (cod)
							</span>
						</div>
						<div class="description_payment">
							<span>Thanh toán khi nhận hàng</span>
						</div>
					</div>
				</div>
		</div>
		<div class="sidebar_checkout checkout_product">
			<div class="list_checkout">
				<div class="product_thumbnail list">
					<img src="img/PL9259.png" alt="">
				</div>
				<div class="product_description list">
					<p> hình phía sau, mời bạn xem qua và cho cảm nghĩ</p>
					<div class="delete_product description">
						<a href="">
							<i class="fas fa-trash-alt"></i>
						</a>
					</div>
					<div class="quantity_product description">
						<a href="">
							<i class="fas fa-minus"></i>
						</a>
						<input type="text">
						<a href="">
							<i class="fas fa-plus"></i>
						</a>
					</div>
				</div>
				<div class="product_price list">
					<p>1560000 đ</p>
				</div>
				<div class="clear_list"></div>
			</div>
			<div class="list_checkout">
					<div class="product_thumbnail list">
						<img src="img/PL9259.png" alt="">
					</div>
					<div class="product_description list">
						<p> hình phía sau, mời bạn xem qua và cho cảm nghĩ</p>
						<div class="delete_product description">
							<a href="">
								<i class="fas fa-trash-alt"></i>
							</a>
						</div>
						<div class="quantity_product description">
							<a href="">
								<i class="fas fa-minus"></i>
							</a>
							<input type="text">
							<a href="">
								<i class="fas fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="product_price list">
						<p>1560000 đ</p>
					</div>
					<div class="clear_list"></div>
				</div>
				<hr>
			<div class="code_discount">
				<input type="text" placeholder="Mã giảm giá">
				<button>Sử dụng</button>
			</div>
			<hr>
			<div class="total_shipping ">
				<span class="title_shipping">Giá vận chuyển</span>
				<span class="show_total_shipping" style="float: right;">200</span>
				<div style="clear: both"></div>
			</div>
			<hr>
			<div class="total_line">
				<span style="font-weight: bold; font-size: 20px;">Tổng cộng</span>
				<span class="show_total_line" style="float: right; font-weight:bold;">109000 đ</span>
				<div style="clear: both"></div>
			</div>
			<div class="checkout_accept">
				<button>Hoàn tất đơn hàng</button>
			</div>
		</div>
	</div>
</body>
</html>	