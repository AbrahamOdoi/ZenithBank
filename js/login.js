$(function() {
	$('form').submit(function() {
		if (validateUsername() && validateUserPassword()) {
			$.post('auth.php',$('form').serialize(),function(response) {
				if (response == 'true') {
					showSuccess('You will be redirected in a moment');
				} else {
					showError(response);
				}
			});
		}

		function validateUsername() {
			if ($('#username').val().length == 0) {
				showError('Username cannot be empty');
				return false;
			} else {
				return true;
			}
		};

		function validateUserPassword() {
			if ($('#password').val().length == 0) {
				showError('password cannot be empty');
				return false;
			} else {
				return true;
			}
		};

		function showSuccess(message) {
			$('<div class="ui-loader ui-overlay-shadow ui_body_success ui-corner-all"><h1>' + message + '</h1></div>').css({
				"display" : "block",
				"opacity" : 0.96,
				"background" : "orange",
				"font-size" : "12px",
				top : $(window).scrollTop() + 10
			}).appendTo($.mobile.pageContainer).delay(2000).fadeOut(400, function() {
				$(this).remove();
			});
		};
		function showError(message) {
			$('<div class="ui-loader ui-overlay-shadow ui_body_error ui-corner-all"><h1>' + message + '</h1></div>').css({
				"display" : "block",
				"opacity" : 0.96,
				"background" : "orange",
				"font-size" : "12px",
				top : $(window).scrollTop() + 10
			}).appendTo($.mobile.pageContainer).delay(2000).fadeOut(400, function() {
				$(this).remove();
			});

		};
		return false;

	});
});

