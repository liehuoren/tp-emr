<<<<<<< HEAD

// Buttons.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).ready(function(){



	// STATE BUTTON
	// =================================================================
	// Require Bootstrap Button
	// -----------------------------------------------------------------
	// http://getbootstrap.com/javascript/#buttons
	// =================================================================
	$('#demo-state-btn').on('click', function () {
		var btn = $(this).button('loading')
		// business logic...

		var doSomething = setTimeout(function(){
			clearTimeout(doSomething);
			btn.button('reset')
		}, 3000);
	});



});
=======

// Buttons.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).ready(function(){



	// STATE BUTTON
	// =================================================================
	// Require Bootstrap Button
	// -----------------------------------------------------------------
	// http://getbootstrap.com/javascript/#buttons
	// =================================================================
	$('#demo-state-btn').on('click', function () {
		var btn = $(this).button('loading')
		// business logic...

		var doSomething = setTimeout(function(){
			clearTimeout(doSomething);
			btn.button('reset')
		}, 3000);
	});



});
>>>>>>> 167bbffb22afb6112c63cb1c93c2905c2cdb6cef
