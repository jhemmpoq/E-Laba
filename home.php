<!-- <head>
	<link rel="stylesheet" href="/assets/css/style.css">
</head> -->
<style>
	
</style>
<?php
include 'db_connect.php';
include 'database/homedb.php';
?>
<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome back ".$_SESSION['login_name']."!"  ?>
									
				</div>
				<hr>
				<div class="row">
				<div class="alert alert-success col-md-3 ml-4">
					<p><b><large>Total Profit Today</large></b></p>
				<hr>
					<p class="text-right"><b><large>
						<?php 
						echo $laundry->num_rows > 0 ? number_format($laundry->fetch_array()['amount'],2) : "0.00";
						
					 ?>
					 </large></b></p>
				</div>
				<div class="alert alert-info col-md-3 ml-4">
					<p><b><large>Total Customer Today</large></b></p>
				<hr>
					<p class="text-right"><b><large>
						<?php 
						echo $laundry1->num_rows > 0 ? number_format($laundry1->fetch_array()['count']) : "0";
					 ?>
					 </large></b></p>
				</div>
				<div class="alert alert-primary col-md-3 ml-4">
					<p><b><large>Total Claimed Laundry Today</large></b></p>
				<hr>
					<p class="text-right"><b><large>
						<?php 
						echo $laundry2->num_rows > 0 ? number_format($laundry2->fetch_array()['count']) : "0";
					 ?>
					 </large></b></p>
				</div>
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<script>
	
</script>