<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $username; ?></div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>


		<ul class="nav menu">
			<li class="parent "><a data-toggle="collapse" href="#employee">
				<em class="fa fa-users">&nbsp;</em> Employee <span data-toggle="collapse" href="#employee" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="employee">
					<li><a class="" href="#">
						<span class="fa fa-user-plus">&nbsp;</span> Add Employee
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-user-minus">&nbsp;</span> Edit Employee
					</a></li>
				</ul>

			<li class="parent "><a data-toggle="collapse" href="#student">
				<em class="fa fa-users">&nbsp;</em> Students <span data-toggle="collapse" href="#student" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="student">
					<li><a class="" href="#">
						<span class="fa fa-user-graduate">&nbsp;</span> Add Students Details
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-user-minus">&nbsp;</span> Edit Students Details
					</a></li>
				</ul>



			<li class="parent "><a data-toggle="collapse" href="#course">
				<em class="fa fa-users">&nbsp;</em> Course <span data-toggle="collapse" href="#course" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="course">
					<li><a class="" href="#">
						<span class="fas fa-chalkboard-teacher">&nbsp;</span> Add Course Details
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-user-minus">&nbsp;</span> Edit Course Details
					</a></li>
				</ul>



			<li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>