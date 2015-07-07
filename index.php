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

	.panel-heading a:after {
		font-family:'Glyphicons Halflings';
		content:"\e114";
		float: right;
		color: grey;
	}
	
	.panel-heading a.collapsed:after {
		content:"\e080";
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
  padding: 0 15px;
}
.footer-container .text-muted {
  margin: 20px 0;
}

	</style>
	
</head>


<body>
	
	<div class="container text-center">

		<div id="second-box">
			<h1>Welcome Back</h1>
		</div>

	    <div id="main-box" class="jumbotron">
			<h1>Welcome, Volunteer!</h1>
			<p>Log in to join a process!</p>
			<p><a id="login-btn" href="#" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-bolt fa-lg"></i> Power Up</a></p>
	    </div>

		<!-- form -->
		<form id="login-form" class="lightboxthing" role="form" onsubmit="return doNothing()">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd">
		  </div>
		  <div class="checkbox">
		    <label><input type="checkbox"> Remember me</label>
		  </div>
		  <button id="login-form-submit" type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>

	<div id="processes-container" class="container">
		<div id="processes" class="panel-group">
		</div>
	</div>

	<footer class="footer">
		<div class="footer-container">
			<p class="text-muted">&copy; Copyright 2015 Harrison Lin</p>
		</div>
	</footer>

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

				$('#login-form').trigger('close');

				$('#main-box').fadeOut(1000);

				$('#second-box').fadeIn(1000, function() {
					$('#second-box').fadeOut(1000, function() {

						var $processes = $('#processes');

						for (i = 1; i <= 5; i++) {
							$processes.append('<div id="processdiv ' + i + '" class="panel panel-primary" >'
												+ '<div class="panel-heading">'
												  + '<h4 class="panel-title">'
													+ '<a data-toggle="collapse" data-target="#collapse'+i+'" href="#collapse'+i+'" class="collapsed">'
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
							lorem.query = '1p';
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

	</script>


</body>
</html>                                		
