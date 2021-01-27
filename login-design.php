<!-- Material form login -->
		<div class="card">

		  <h5 class="card-header info-color white-text text-center py-4">
		    <strong>Log In</strong>
		  </h5>

		  <!--Card content-->
		  <div class="card-body px-lg-5 pt-0">

		    <!-- Form -->
		    <form class="text-center" style="color: #757575;" method="POST" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		      <!-- Email -->
		      <div class="md-form">
		        <input type="text" id="materialLoginFormEmail" name="username" class="form-control" required>
		        <label for="materialLoginFormEmail">User-Name</label>
		      </div>

		      <!-- Password -->
		      <div class="md-form">
		        <input type="password" id="materialLoginFormPassword" name="password" class="form-control" required>
		        <label for="materialLoginFormPassword">Password</label>
		      </div>

		      <div class="d-flex justify-content-around">

		        <div>
		          <!-- Forgot password 
		          <a href="#"> <span style="font-size: 75%;">Forgot password?</span> </a>
					-->

		        </div>
		      </div>

		      <!-- Sign in button -->
		      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Log In</button>

		      <!-- Register -->
		   

		    </form>
		    <!-- Form -->

		  </div>

		</div>
		<!-- Material form login -->