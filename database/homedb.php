<?php 
include 'db_connect.php';

    $laundry = $conn->query("SELECT SUM(total_amount) as amount FROM laundry_list where pay_status= 1 and date(date_created)= '".date('Y-m-d')."'");
	// echo $laundry->num_rows > 0 ? number_format($laundry->fetch_array()['amount'],2) : "0.00";

    $laundry1 = $conn->query("SELECT count(id) as `count` FROM laundry_list where  date(date_created)= '".date('Y-m-d')."'");
	// echo $laundry1->num_rows > 0 ? number_format($laundry1->fetch_array()['count']) : "0";

    $laundry2 = $conn->query("SELECT count(id) as `count` FROM laundry_list where status = 3 and date(date_created)= '".date('Y-m-d')."'");
	// echo $laundry2->num_rows > 0 ? number_format($laundry2->fetch_array()['count']) : "0";






?>