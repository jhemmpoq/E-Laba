<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Laundry Management System</title>

	<link rel="stylesheet" href="assets/css/login.css">
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>

</style>

<body>


  <main id="main" class=" bg-dark">
  		<div id="login-left">
  			<div class="logo">
  				<div class="laundry-logo"></div>
  			</div>
  		</div>
  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
					  <h1 class="title">E-Laba</h1>
					  <h6 class="sub">Welcome! Please login your account.</h6>
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
						  	<div class="form-check">
  								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 							 		<label class="form-check-label" for="flexCheckDefault">
   									 	Remember Me
 									</label>
							</div>
							<div class="form-forgot">
								<a href="">Forgot Password</a>
							</div>
							<div class="buttons">
								<div class="button-log">
									<button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button>
								</div>
								<div class="button-sign">
									<button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Sign Up</button>
								</div>
							</div>
  					</form>
					  
  				</div>
				  <!-- <div class="foot">
					<footer class="footer">
					<p class="center">Terms of Use. Privacy policy</p>
					</footer>
				</div> -->

  				
			  	<div class="foot">
					<footer class="footer">
					<p class="center">Terms of Use. Privacy policy</p>
					</footer>
				</div>
			</div>
  		</div>
		  
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>