<?php 
ob_start();
session_start();
	include_once "myconfix/config.php";
	include_once "My_function/function.php";
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else{
		$page = 'main';
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">
	<script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="boostrap/jquery/jquery.js"></script>
	<link rel="stylesheet" href="boostrap/font_awesome/css/all.min.css">
	<script type="text/javascript" href="boostrap/font_awesome/js/all.js"></script>
	<title>Document</title>
	<script type="text/javascript">
   		$(document).ready(function(){
   			$(window).scroll(function(event){
   				var pos_location = $('html,body').scrollTop();
   				if(pos_location>20){
   					$('.menu_0').addClass('fixed');
   				}
   				else {
   					$('.menu_0').removeClass('fixed');
   				}
   			});
   		});
   		
   		// function show_menu(){
   		// 	  var bar = document.getElementById('bar');
   		// 	$('.menu').slideToggle();
   		// }
   		// function exit_menu_reponsive(){
   			
   		// }
    </script>
    <script type="text/javascript">
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
   	</script>
  <!--  	<script>
   		function click_size(){
   			document.getElementById("nav_a").style.display = 'fixed';
   			alert("h");
   		}
   	</script> -->
	
</head>
<body>
	<div class="container-fruid boss">		
		<?php 

		include_once 'layout/header.php';
			if ($page == 'login' || $page == 'singup' || $page == 'destroy' || $page == 'cart' || $page == 'checkout' ) {
				// code...
				include_once'view/'.$page.'.php';
			}
			else{
				include_once 'layout/banner.php';
				include_once'view/'.$page.'.php'; 
			}
		 ?>
		
		<div class="container footer"></div>
		<?php include_once 'view/detail_product.php'; ?>
	</div>
</body>
</html>
