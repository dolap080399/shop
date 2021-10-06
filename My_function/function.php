<?php
	function logo(){
		global $conn;
		$sql = "SELECT *FROM logo WHERE stt_logo = 0";
		$query = mysqli_query($conn,$sql);
		$arr = array();
		$row = mysqli_fetch_array($query);
		$arr[] = $row;
		return $arr;
	}
	function header_menu(){
		global $conn;
		$sql = "SELECT *FROM head WHERE stt_header = 0 ORDER BY sort_cartegories ";
		$query = mysqli_query($conn , $sql);
		$result= array();
		while ($row = mysqli_fetch_array($query)) {
			$result[] = $row;
			// code...
		}
		return $result;
	}
	function menu(){
		global $conn;
		$sql = "SELECT product_type.name_product_type,product_type.id_header FROM product_type WHERE stt_product_type = 0 ORDER BY sort";
		$query = mysqli_query($conn, $sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
			// code...
			$result[] = $row;
		}
		return $result;
	}
	function banner(){
		global $conn;
		$sql ="SELECT *FROM banner WHERE stt_banner = 0 ORDER BY sort";
		$query = mysqli_query($conn,$sql);
		$result = array();
		while($arr = mysqli_fetch_array($query)) {
		$result[] = $arr;
		}
		return $result;
	}
	function product_new(){
		global $conn;
		$sql = "SELECT *FROM product WHERE stt_product= 0 AND id_category = 2 LIMIT 6";
		$query = mysqli_query($conn,$sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
		$result[] = $row;
		}
		return $result;
		
	}
	function product_sale(){
		global $conn;
		$sql = "SELECT *FROM product WHERE stt_product = 0 AND id_category = 1 LIMIT 6";
		$query = mysqli_query($conn,$sql);
		$reslt[]= array();
		while ($row = mysqli_fetch_array($query)) {
			
			$result[] = $row;

		}
		return $result;
	}
	function add_user($name,$email,$phone,$pass){
		global $conn;
		$sql = "INSERT INTO user (name_user,email,phone,pass)VALUES('$name','$email','$phone','$pass')";
		$query = mysqli_query($conn,$sql);
	}
	function login_user(){
		global $conn;
		$sql = "SELECT user.id_user,user.name_user, user.email,user.pass FROM user WHERE stt_user = 0";
		$query = mysqli_query($conn,$sql);
		$arr = array();
		while($row = mysqli_fetch_array($query)){
			$arr[] = $row;
		}
		return $arr;
	}

  ?>