	$('document').ready(function () {

		var teamName_state = false;
		var email_state = false;

		var player1_state = false;
		var pass1_state = false;
		var phone1_state = false;

		var player2_state = false;
		var pass2_state = false;
		var phone2_state = false;

		$('#teamname').on('blur', function () {
			var teamname = $('#teamname').val();

			if (teamname == '') {
				teamName_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'teamname_check': 1,
					'teamname': teamname,
				},
				success: function (response) {
					if (response == 'taken') {
						teamName_state = false;
						$('#teamname').parent().removeClass("form-control");
						$('#teamname').parent().removeClass("form_success");
						$('#teamname').parent().addClass("form_error");
						$('#teamname').siblings("span").text('Sorry... Username already taken');
					} else if (response == 'not_taken') {
						teamName_state = true;
						$('#teamname').parent().removeClass("form_error");
						$('#teamname').parent().addClass("form_success");
						$('#teamname').siblings("span").text('Username available');
					}
				}
			});
		});

		$('#email').on('blur', function () {
			var email = $('#email').val();

			if (email == '') {
				email_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'email_check': 1,
					'email': email,
				},
				success: function (response) {
					if (response == 'taken') {
						email_state = false;
						$('#email').parent().removeClass("form-control");
						$('#teamname').parent().removeClass("form_success");
						$('#email').parent().addClass("form_error");
						$('#email').siblings("span").text('Sorry... Email already taken');
					} else if (response == 'not_taken') {
						email_state = true;
						$('#email').parent().removeClass("form_error");
						$('#email').parent().addClass("form_success");
						$('#email').siblings("span").text('Email available');
					}
				}
			});
		});

		$('#player1').on('blur', function () {
			var player1 = $('#player1').val();

			if (player1 == '') {
				player1_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'player1_check': 1,
					'player1': player1,
				},
				success: function (response) {
					if (response == 'taken') {
						player1_state = false;
						$('#player1').parent().removeClass("form-control");
						$('#player1').parent().addClass("form_error");
						$('#player1').siblings("span").text('Sorry...Player 1 name taken');
					} else if (response == 'not_taken') {
						player1_state = true;
						$('#player1').parent().removeClass("form-control");
						$('#player1').parent().addClass("form_success");
						$('#player1').siblings("span").text('Player 1 name available');
					}
				}
			});
		});

		$('#pass1').on('blur', function () {
			var pass1 = $('#pass1').val();

			if (pass1 == '') {
				pass1_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'pass1_check': 1,
					'pass1': pass1,
				},
				success: function (response) {
					if (response == 'taken') {
						pass1_state = false;
						$('#pass1').parent().removeClass("form-control");
						$('#pass1').parent().addClass("form_error");
						$('#pass1').siblings("span").text('Sorry...Player 1 IC/Passport number taken');
					} else if (response == 'not_taken') {
						pass1_state = true;
						$('#pass1').parent().removeClass("form-control");
						$('#pass1').parent().addClass("form_success");
						$('#pass1').siblings("span").text('Player 1 IC/Passport number available');
					}
				}
			});
		});

		$('#phone1').on('blur', function () {
			var phone1 = $('#phone1').val();

			if (phone1 == '') {
				phone1_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'phone1_check': 1,
					'phone1': phone1,
				},
				success: function (response) {
					if (response == 'taken') {
						phone1_state = false;
						$('#phone1').parent().removeClass("form-control");
						$('#phone1').parent().addClass("form_error");
						$('#phone1').siblings("span").text('Sorry...Player 1 Phone number taken');
					} else if (response == 'not_taken') {
						phone1_state = true;
						$('#phone1').parent().removeClass("form-control");
						$('#phone1').parent().addClass("form_success");
						$('#phone1').siblings("span").text('Player 1 Phone number available');
					}
				}
			});
		});

		$('#player2').on('blur', function () {
			var player2 = $('#player2').val();

			if (player2 == '') {
				player2_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'player2_check': 1,
					'player2': player2,
				},
				success: function (response) {
					if (response == 'taken') {
						player2_state = false;
						$('#player2').parent().removeClass("form-control");
						$('#player2').parent().addClass("form_error");
						$('#player2').siblings("span").text('Sorry...Player 2 name taken');
					} else if (response == 'not_taken') {
						player2_state = true;
						$('#player2').parent().removeClass("form-control");
						$('#player2').parent().addClass("form_success");
						$('#player2').siblings("span").text('Player 2 name available');
					}
				}
			});
		});

		$('#pass2').on('blur', function () {
			var pass2 = $('#pass2').val();

			if (pass2 == '') {
				pass2_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'pass2_check': 1,
					'pass2': pass2,
				},
				success: function (response) {
					if (response == 'taken') {
						pass2_state = false;
						$('#pass2').parent().removeClass("form-control");
						$('#pass2').parent().addClass("form_error");
						$('#pass2').siblings("span").text('Sorry...Player 2 IC/Passport number taken');
					} else if (response == 'not_taken') {
						pass2_state = true;
						$('#pass2').parent().removeClass("form-control");
						$('#pass2').parent().addClass("form_success");
						$('#pass2').siblings("span").text('Player 2 IC/Passport number available');
					}
				}
			});
		});

		$('#phone2').on('blur', function () {
			var phone2 = $('#phone2').val();

			if (phone2 == '') {
				phone2_state = false;
				return;
			}

			$.ajax({
				url: 'register.php',
				type: 'post',
				data: {
					'phone2_check': 1,
					'phone2': phone2,
				},
				success: function (response) {
					if (response == 'taken') {
						phone2_state = false;
						$('#phone2').parent().removeClass("form-control");
						$('#phone2').parent().addClass("form_error");
						$('#phone2').siblings("span").text('Sorry...Player 2 IC/Passport number taken');
					} else if (response == 'not_taken') {
						phone2_state = true;
						$('#phone2').parent().removeClass("form-control");
						$('#phone2').parent().addClass("form_success");
						$('#phone2').siblings("span").text('Player 2 IC/Passport number available');
					}
				}
			});
		});

		$('#reg_btn').on('click', function () {
			var teamname = $('#teamname').val();
			var email = $('#email').val();

			var player1 = $('#player1').val();
			var pass1 = $('#pass1').val();
			var phone1 = $('#phone1').val();

			var player2 = $('#player2').val();
			var pass2 = $('#pass2').val();
			var phone2 = $('#phone2').val();

			if (teamName_state == false || email_state == false) {
				$('#error_msg').text('Fix the errors in the form first');

			} else {
				// proceed with form submission

				$.ajax({
					url: 'register.php',
					type: 'post',
					data: {
						'submit': 1,
						'teamname': teamname,
						'email': email,
						'player1': player1,
						'pass1': pass1,
						'phone1': phone1,
						'player2': player2,
						'pass2': pass2,
						'phone2': phone2
					},
					success: function (response) {
						alert('user saved');
						$('#teamname').val('');
						$('#email').val('');
						$('#player1').val('');
						$('#pass1').val('');
						$('#phone1').val('');
						$('#player2').val('');
						$('#pass2').val('');
						$('#phone2').val('');
					}
				});
			}

		});
	});