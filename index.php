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


	<style type="text/css">

	.btn-circle.btn-lg {
	  border-radius: 50px;
	}

	@media (min-width: 768px) {

	  #login-btn {
	    //background-color: #eee;


	    -webkit-transition: .4s cubic-bezier(0,1.5,.5,1);
	    -moz-transition: .4s cubic-bezier(0,1.5,.5,1);
	    -o-transition: .4s cubic-bezier(0,1.5,.5,1);
	    transition: .4s cubic-bezier(0,1.5,.5,1);
	  }
	  #login-btn:hover {
	    //background-color: #fc3;
	    -webkit-transform: scale(1.2);
	    -moz-transform: scale(1.2);
	    -o-transform: scale(1.2);
	    -ms-transform: scale(1.2);
	    transform: scale(1.2);
	  }
	}

	.lightboxthing {
	-moz-border-radius: 6px;
        background: #eef2f7;
        -webkit-border-radius: 6px;
        border: 1px solid #536376;
        -webkit-box-shadow: rgba(0,0,0,.6) 0px 2px 12px;
        -moz-box-shadow:  rgba(0,0,0,.6) 0px 2px 12px;;
        padding: 14px 22px;
        width: 400px;
        position: relative;
        display: none;
	}

	.btn-default {
        background: #FAFBFD;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
	    transition: all 0.3s ease-in-out 0s;
	}

	.btn-default:hover {
		background: #fff;
	}

	#main-box {
		margin-bottom: 200px;
	}

	#second-box {
		display: none;
		position: absolute;
		top: 25%;
		left: 50%;
		/* bring your own prefixes */
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);

	}

	#second-box h1 {
		font-size: 72px;
	}

	#processes-container {
		margin-top: 20px;
	}

	.panel {
		display: none;
		-webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
		-moz-transition: -webkit-box-shadow 0.15s ease-in-out;
		-o-transition: -webkit-box-shadow 0.15s ease-in-out;
	    transition: -webkit-box-shadow 0.15s ease-in-out;

		-webkit-transition: -moz-box-shadow 0.15s ease-in-out;
		-moz-transition: -moz-box-shadow 0.15s ease-in-out;
		-o-transition: -moz-box-shadow 0.15s ease-in-out;
	    transition: -moz-box-shadow 0.15s ease-in-out;

		-webkit-transition: box-shadow 0.15s ease-in-out;
		-moz-transition: box-shadow 0.15s ease-in-out;
		-o-transition: box-shadow 0.15s ease-in-out;
	    transition: box-shadow 0.15s ease-in-out;
	}

	.panel:hover {
		-webkit-box-shadow: 0 0 2px 2px rgba(77, 184, 255, 0.3);
		-moz-box-shadow: 0 0 2px 2px rgba(77, 184, 255, 0.3);
		box-shadow: 0 0 2px 2px rgba(77, 184, 255, 0.3);
		/*-webkit-box-shadow: inset 0 0 3px 3px rgba(22, 22, 105, 0.5);
		-moz-box-shadow: inset 0 0 3px 3px rgba(22, 22, 105, 0.5);
		box-shadow: inset 0 0 3px 3px rgba(22, 22, 105, 0.5);*/
	}
	
	.panel-heading {
		text-decoration: none;
	}

	.panel-heading a {
		cursor: pointer;
	}

	.panel-heading a:after {
		cursor: pointer;
		font-family:'Glyphicons Halflings';
		content:"\e114";
		float: right;
		color: white;
	}
	
	.panel-heading a.collapsed:after {
		content:"\e080";
	}
		
	#sidebar-container {
		display: none;
	}
	
.sidebar {
	position: fixed;
	right: 0;
	background-color: #000;
	height: 100%;
	background-color: #71b1d1;
	color: white;

	-webkit-padding-start: 0px;
	-moz-padding-start: 0px;
	-o-padding-start: 0px;
	padding-start: 0px;
}

.sidebar li {
	display: block;
	background-color: #71b1d1;
	color: white;
	position: relative;
	height: auto;

	overflow: auto;

	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}



.sidebar a {
	text-decoration: none;
	display: block;
	background-color: transparent;
	color: white;
	padding: 1rem 3rem 1rem 3rem;
	position: relative;
	line-height: 1rem;
}


.sidebar li:hover {
	background-color: #7cc1de;
}

.sidebar li:active {
	background-color: white;
	color: #323232;
}

.panel-group {
	margin-bottom: 80px;
}

	/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}

.footer-container {
  width: auto;
  max-width: 680px;
  padding: 0 20px;
}
.footer-container .text-muted {
  margin: 18px 0;
}

	</style>
	
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

		<!-- profile form -->
		<form id="profile-form" class="lightboxthing" role="form" onsubmit="return doNothing()">
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

	<div class="row-fluid">

	<div id="processes-container" class="container-fluid col-sm-8 col-sm-offset-1">
		<div id="processes" class="panel-group">
		</div>
	</div>

	<div id="sidebar-container" class="container-fluid col-sm-3">
	</div>

	</div>

	<script>

		    $('#login-btn').click(function(e) {
				$('#login-form').lightbox_me({
					centered: true, 
					onLoad: function() { 
					$('#login-form').find('input:first').focus();
					}
				});
				e.preventDefault();
		    });

		    
			$('#login-form').submit(function() {

				var values = {};
				$.each($('#login-form').serializeArray(), function(i, field) {
				    values[field.name] = field.value;
				});

				if (values['email'].length > 0)
					$('#second-box-heading').append(", " + values['email'].substring(0, values['email'].indexOf('@')));

				$('#login-form').trigger('close');

				$('#main-box').fadeOut(1000);

				$('#second-box').fadeIn(1000, function() {
					$('#second-box').fadeOut(1000, function() {

						$('#sidebar-container').append('<ul class="sidebar" style="">'
													   +  '<li>'
													     +  '<a id="edit-profile" href="#" onclick="profiledialog()">'
														   +  '<h4> <i class="fa fa-user"></i> Edit Profile </h4>'
														 +  '</a>'
													   +  '</li>'
													 + '</div>');

						$('#sidebar-container').fadeIn(1000);

						var $processes = $('#processes');

						for (i = 1; i <= 5; i++) {
							$processes.append('<div id="processdiv ' + i + '" class="panel panel-primary" >'
												+ '<div class="panel-heading">'
												  + '<h4 class="panel-title">'
													+ '<a data-toggle="collapse" data-target="#collapse'+i+'" class="collapsed">'
													  + 'Process ' + i
											        + '</a>' 
												  + '</h4>'
											    + '</div>'
											  + '<div id="collapse' + i + '" class="panel-collapse collapse">'
												+ '<div class="panel-body">'
												  + '<img src="http://lorempixel.com/200/100/city/'+i+'" class="img-responsive img-thumbnail" width="200" height="100">'
												  + '<h4>Description for process ' + i + ': </h4>'
												  + '<p id="lorem'+i+'"></p>'
												+ '</div>'
											  + '</div>'
											+ '</div>');
						}

						for (i = 1; i <= 5; i++) {
							var lorem = new Lorem;
							lorem.type = Lorem.TEXT;
							lorem.query = '7s';
							lorem.createLorem(document.getElementById('lorem'+i));
						}

						$('.panel').each(function(index, element) {

							setTimeout(function(){
								$(element).fadeIn(800);
							}, index * 600);

						});

					});
				});

		    });

			function doNothing() {
				return false;
			}

			function profiledialog() {
				$('#profile-form').lightbox_me({
					centered: true, 
					onLoad: function() { 
					$('#profile-form').find('input:first').focus();
					}
				});
				$('#edit-profile').preventDefault();
			}

			$('#profile-form').submit(function () {
				$('#profile-form').trigger('close');
			});

			$('#register-link').click(function(e) {
				alert("redirect to register");
			});

	</script>


</body>

	<footer class="footer">
		
		<div class="footer-container">
			<p class="text-muted">&copy; Copyright 2015 Harrison Lin</p>
		</div>
		
	</footer>

</html>                                		
