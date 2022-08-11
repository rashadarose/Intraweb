<?php

include_once 'header.php';

?>



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card2">
			<div class="card-header">
				<h3>Sign In</h3>
				<!--<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
			<div class="card-body2">
				<form action="includes/signup.inc.php" method="post">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="Full Name">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
						</div>
						<input type="text"  name="email" class="form-control" placeholder="Email">
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="far fa-id-badge"></i></span>
						</div>
						<input type="text" name="uid" class="form-control" placeholder="Username">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pwd" class="form-control" placeholder="Password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pwdrepeat" class="form-control" placeholder="Repeat Password">
					</div>



					<!--<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>-->
					<div class="form-group">
						<!--<input type="submit" value="Login" class="btn float-right login_btn">-->
						<button type="submit" name="submit" class="btn float-right login_btn">Sign Up</button>
					</div>
				</form>
			</div>
			<div class="card-footer" style="margin-bottom: 4%;">
				<div class="d-flex justify-content-center links">
					<span class="input-group-text" style="margin-right: 5%; background-color: #FFC312; border: none;"><a href="../../index.php" style="color: black;"><i class="fas fa-home"  ></i></a></span>
					 Already have an account? <a href="login.php">&nbsp; Login</a>
				</div>
				<!--<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>-->
				<!-- Check usewr Input errormessages-->
			<?php

					if(isset($_GET["error"])){

						if($_GET["error"] == "emptyinput"){

							echo "<p>Fill in all fields</p>";
						}
						else if($_GET["error"] == "invalidUid"){

							echo "<p>Choose a proper username!</p>";
						}
						else if($_GET["error"] == "invalidEmail"){

							echo "<p>Choose a proper email!</p>";
						}
						else if($_GET["error"] == "passwordsdontmatch"){

							echo "<p>Passwords don't Match!</p>";
						}
						else if($_GET["error"] == "usertaken"){

							echo "<p>Choose a another username!</p>";
						}
						else if($_GET["error"] == "none"){

							echo "<p>Choose a another username!</p>";
						}

					}

			?>





			</div>
		</div>
		
	</div>

</div>

<!-- Check usewr Input errormessages-->
			<?php

					/*if(isset($_GET["error"])){

						if($_GET["error"] == "emptyinput"){

							echo "<p>Fill in all fields</p>";
						}
						else if($_GET["error"] == "invalidUid"){

							echo "<p>Choose a proper username!</p>";
						}
						else if($_GET["error"] == "invalidEmail"){

							echo "<p>Choose a proper email!</p>";
						}
						else if($_GET["error"] == "passwordsdontmatch"){

							echo "<p>Passwords don't Match!</p>";
						}
						else if($_GET["error"] == "usertaken"){

							echo "<p>Choose a another username!</p>";
						}
						else if($_GET["error"] == "none"){

							echo "<p>Choose a another username!</p>";
						}

					}*/

			?>


<?php

include_once 'footer.php';

?>