/*!
 * sinicatest.js
 * Copyright 2015 Harrison Lin
 * Licensed under the GNU Public License
 */


/* temporary global variables */
var isAdmin = false;

var email;
var firstName;
var lastName;
var phoneNumber;
var birthDate;



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

	if (values['email'].substring(0, values['email'].indexOf('@')) === "admin")
		isAdmin = true; 

	// Close login form lightbox
	$('#login-form').trigger('close');

	// fade out main login page
	$('#main-box').fadeOut(1000);

	// Fade in welcome text
	$('#second-box').fadeIn(1000, function() {
		// fade out welcome text
		$('#second-box').fadeOut(1000, function() {

			var sidebarHTML = "";

			// load sidebar
			sidebarHTML += '<ul id="sidebar-id" class="sidebar" style="">'
						   +  '<li class="admin-inactive">'
							 +  '<a id="view-processes" href="#" onclick="loadProcesses()">'
							   +  '<h4> <i class="fa fa-th-list"></i>&nbsp; View Processes </h4>'
							 +  '</a>'
						   +  '</li>'
						   +  '<li class="admin-inactive">'
							 +  '<a id="view-profile" href="#" onclick="loadViewProfile()">'
							   +  '<h4> <i class="fa fa-user"></i>&nbsp; View Profile </h4>'
							 +  '</a>'
						   +  '</li>'
						   +  '<li class="admin-inactive">'
							 +  '<a id="edit-profile" href="#" onclick="loadEditProfile()">'
							   +  '<h4> <i class="fa fa-pencil-square-o"></i>&nbsp; Edit Profile </h4>'
							 +  '</a>'
						   +  '</li>';
			if(isAdmin)
				sidebarHTML += '<li class="admin-inactive">'
							   +  '<a id="create-projects" href="#" onclick="" class="admin-item">'
								 +  '<h4> <i class="fa fa-plus-square"></i>&nbsp; Create Projects </h4>'
							   +  '</a>'
							+  '</li>'
						    +  '<li class="admin-inactive">'
							  +  '<a id="manage-volunteers" href="#" onclick="" class="admin-item last-item">'
							    +  '<h4> <i class="fa fa-users"></i>&nbsp; Manage Volunteers </h4>'
							  +  '</a>'
						    +  '</li>';

			sidebarHTML += '</ul>';

			$('#sidebar-container').append(sidebarHTML);

			if (isAdmin)
			{
				$('.sidebar').css("background-color", "#6B79D8");	

				$('.sidebar li').each(function(index, element){
					$(element).removeClass("admin-inactive");
					$(element).addClass("admin-active");
				});
			}

			// fade in sidebar
			$('#sidebar-container').fadeIn(1000);

			// load processes
			var $processes = $('#processes');

			$processes.append('<h1 class="not-shown">View Processes</h1>');

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
									  + '<img src="http://lorempixel.com/150/75/city/'+i+'" class="img-responsive img-thumbnail" width="200" height="100">'
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

/*
			if (isAdmin)
			{
				$('.panel-heading').each(function(index, element) {
					$(element).addClass("admin-active");
				});
			}
*/

			// fade in heading
			$('h1').fadeIn(800, function() {

				// fade in processes sequentially
				$('.panel').each(function(index, element) {
					// set delay
					setTimeout(function(){
						$(element).fadeIn(800);
					}, (index+1) * 600);
				});

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

	if (!$('#processes').is(":visible")) {
		if ($('#edit-profile').is(":visible")) {
			$('#edit-profile').fadeOut(500, function(){
				$('#processes').fadeIn(500);
			});
		} else {	
			$('#view-profile').fadeOut(500, function(){
				$('#processes').fadeIn(500);
			});
		}
	}
}

/* TODO replace with loading of an edit profile panel */
function loadEditProfile() {

	if (!$('#edit-profile').is(":visible")) {
		if ($('#processes').is(":visible")) {
			$('#processes').fadeOut(500, function(){
				$('#edit-profile').fadeIn(500);
			});
		} else {
			$('#view-profile').fadeOut(500, function(){
				$('#edit-profile').fadeIn(500);
			});
		}
	}
}

/* TODO replace with loading of a view profile panel */
function loadViewProfile() {
	if (!$('#view-profile').is(":visible")) {
		if ($('#processes').is(":visible")) {
			$('#processes').fadeOut(500, function(){
				$('#view-profile').fadeIn(500);
			});
		} else {
			$('#edit-profile').fadeOut(500, function(){
				$('#view-profile').fadeIn(500);
			});
		}
	}
}

/* closes profile-form on submit */
$('#profile-form').submit(function () {
	alert("profile updated");
});

/* TODO replace with lightbox or loading of the register panel */
$('#register-link').click(function(e) {
	alert("redirect to register");
});
