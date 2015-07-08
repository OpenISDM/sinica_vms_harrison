/*!
 * sinicatest.js
 * Copyright 2015 Harrison Lin
 * Licensed under the GNU Public License
 */

/* load login lightbox */

$('#login-btn').click( function(e) {
	$('#login-form').lightbox_me({
		centered: true, 
		onLoad: function() { 
		$('#login-form').find('input:first').focus();
		}
	});
	e.preventDefault();
});

/* post-login animations and html loading */

$('#login-form').submit(function() {

	// Append email username to welcome text
	var values = {};
	$.each($('#login-form').serializeArray(), function(i, field) {
		values[field.name] = field.value;
	});

	if (values['email'].length > 0)
		$('#second-box-heading').append(", " + values['email'].substring(0, values['email'].indexOf('@')));


	// Close login form lightbox
	$('#login-form').trigger('close');

	// fade out main login page
	$('#main-box').fadeOut(1000);

	// Fade in welcome text
	$('#second-box').fadeIn(1000, function() {
		// fade out welcome text
		$('#second-box').fadeOut(1000, function() {
			// load sidebar
			$('#sidebar-container').append('<ul class="sidebar" style="">'
										   +  '<li class="">'
											 +  '<a id="view-processes" href="#" onclick="loadProcesses()">'
											   +  '<h4> <i class="fa fa-th-list"></i>&nbsp; View Processes </h4>'
											 +  '</a>'
										   +  '</li>'
										   +  '<li>'
											 +  '<a id="edit-profile" href="#" onclick="loadEditProfile()">'
											   +  '<h4> <i class="fa fa-user"></i>&nbsp; Edit Profile </h4>'
											 +  '</a>'
										   +  '</li>'
										 + '</div>');
			// fade in sidebar
			$('#sidebar-container').fadeIn(1000);

			// load processes
			var $processes = $('#processes');
			for (i = 1; i <= 5; i++) {
				$processes.append('<div id="processdiv ' + i + '" class="panel panel-primary" >'
									+ '<div class="panel-heading">'
									  + '<h4 class="panel-title">'
										+ '<a data-toggle="collapse" data-target="#collapse'+i+'" class="collapsed noselect">'
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

			// load lorem ipsum text into processes
			for (i = 1; i <= 5; i++) {
				var lorem = new Lorem;
				lorem.type = Lorem.TEXT;
				lorem.query = '7s';
				lorem.createLorem(document.getElementById('lorem'+i));
			}

			// fade in processes sequentially
			$('.panel').each(function(index, element) {
				// set delay
				setTimeout(function(){
					$(element).fadeIn(800);
				}, index * 600);
			});

		});
	});
});

/* in replace of preventDefault which I can't get working */
function doNothing() {
	return false;
}

/* TODO replace with loading of processes */
function loadProcesses() {
	alert('load processes');
}

/* TODO replace with loading of an edit profile panel */
function loadEditProfile() {
	$('#profile-form').lightbox_me({
		centered: true, 
		onLoad: function() { 
		$('#profile-form').find('input:first').focus();
		}
	});
}

/* closes profile-form on submit */
$('#profile-form').submit(function () {
	$('#profile-form').trigger('close');
});

/* TODO replace with lightbox or loading of the register panel */
$('#register-link').click(function(e) {
	alert("redirect to register");
});
