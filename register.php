<?php
include 'utility/connect.php';
include 'header.php';
?>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="utility/process.php" method="POST">
					<span class="login100-form-title p-b-49">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="register" type="submit">
								Register
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<a href="login.php" class="txt2">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include 'footer.php';
?>
<?php if (@$_GET['status']=="matcherror")  {?>  
	<script>
		Swal.fire({
			type: 'error',
			title: 'The passwords don\'t match!',
			text: 'The passwords you type are not the same!',
			showConfirmButton: true,
			confirmButtonText: 'close'
		})
	</script>
<?php } ?>