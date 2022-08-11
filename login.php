<?php

include_once 'header.php';

?>

<div class="container">
    
	<div class="d-flex justify-content-center h-100">
	    	
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<!--<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
			<div class="card-body">
				<form action="includes/login.inc.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id='uidName' type="text" name="uid" class="form-control" placeholder="Username/Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"  name="pwd" class="form-control" placeholder="Password">
					</div>
					<!--<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>-->
					<div class="form-group">
						<!--<input type="submit" value="Login" class="btn float-right login_btn">-->
						<button type="submit" name="submit" class="btn float-right login_btn">Login</button>
					</div>
				</form>
			</div>
			<!--<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<span class="input-group-text" style="margin-right: 5%; background-color: #FFC312; border: none;"><a href="../../index.php" style="color: black;"><i class="fas fa-home"  ></i></a></span>
					Don't have an account? <a href="signup.php">&nbsp; Sign Up</a>
				</div>-->
					<center style="margin-top: -5%;" class="d-flex justify-content-center"><img src="Dove.png"; height='150' width='250'></center>
				<div class="d-flex justify-content-center">
					<!--<a href="#">Forgot your password?</a>-->
				
								<?php

									if(isset($_GET["error"])){

										if($_GET["error"] == "emptyinput"){

											echo "<p>Fill in all fields!</p>";
										}
										else if($_GET["error"] == "wronglogin"){

											echo "<p>Incorrect Login Info!</p>";
										}else if($_GET["error"] == "wrongpassword"){

											echo "<p>Wrong Password!</p>";
										}
										

									}

							?>
					</div>

			<!--</div>-->
		</div>
		
	</div>
	
</div>




<?php

include_once 'footer.php';

?>