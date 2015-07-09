<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Volunteer Home Page</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- custom Bootstrap css theme -->
	<link rel="stylesheet" type="text/css" href="style/css/journal/bootstrap.min.css">
	<!-- Font-Awesome CDN -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	

	<!-- Bootstrap and JQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Library for Lightboxing -->
	<script src="style/js/jquery.lightbox_me.js" type="text/javascript" charset="utf-8"></script>

	<!-- Library for Tweening -->
	<script src="style/js/TweenMax.min.js" type="text/javascript" charset="utf-8"></script>

	<!-- Library for Lorem Ipsum -->
	<script src="style/js/loremjs/lorem.js" type="text/javascript" charset="utf-8"></script>

	<!-- Custom css -->
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	
</head>


<body>
	
	<div class="container text-center">

		<div id="second-box">
			<h1 id="second-box-heading">Welcome Back</h1>
		</div>

	    <div id="main-box" class="jumbotron">
			<h1>Welcome, Volunteer!</h1>
			<p>Log in to join a process!</p>
			<p><a id="login-btn" href="#" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-bolt fa-lg"></i> Power Up</a></p>
	    </div>

		<!-- login form -->
		<form id="login-form" class="lightboxthing" role="form" onsubmit="return doNothing()">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
		  </div>
		  <div class="checkbox">
		    <label><input type="checkbox" name="checkbox"> Remember me</label>
		  </div>
		  <button id="login-form-submit" type="submit" class="btn btn-default">Submit</button>
		  <a id="register-link" href="#" style="float:right; cursor:pointer;">New User?</a>
		</form>	

	</div>

	<div class="row-fluid">

		<div id="processes-container" class="container-fluid col-sm-8 col-sm-offset-1">
			<div id="processes" class="panel-group">
			</div>
			
			<div id="edit-profile" class="not-shown">
				<!-- profile form -->
				<h1>Edit Profile</h1>
				<form id="profile-form" class="" role="form" onsubmit="return doNothing()">
				  <div class="form-group">
					<label for="first-name">First Name:</label>
					<input type="text" class="form-control" id="first-name" name="first-name">
				  </div>
				  <div class="form-group">
					<label for="last-name">Last Name:</label>
					<input type="text" class="form-control" id="last-name" name="last-name">
				  </div>
				  <div class="form-group">
					<label for="bdate">Birthday:</label>
					<input type="date" class="form-control" id="bdate" name="bdate">
				  </div>
				  <div class="form-group">
					<label for="pnumber">Phone Number (Format: XXXX-XXXXXX):</label>
					<input type="tel" pattern='\d{4}[\-]\d{6}' class="form-control" id="pnumber" name="pnumber">
				  </div>
				  <button id="profile-form-submit" type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>

		<div id="sidebar-container" class="container-fluid col-sm-3">
		</div>

	</div>

</body>

<footer class="footer">
	<!-- Custom js -->		
	<script src="style/js/sinicatest.js" type="text/javascript" charset="utf-8"></script>

	<div class="footer-container">
		<p class="text-muted">&copy; Copyright 2015 Harrison Lin</p>
	</div>
</footer>

</html>                                		
