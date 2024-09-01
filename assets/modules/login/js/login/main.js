

(function ($) {
	"use strict";

	/*==================================================================
    [ Validate ]*/
	var input = $(".validate-input .input100");

	$(".validate-form").on("submit", function () {
		var check = true;

		for (var i = 0; i < input.length; i++) {
			if (validate(input[i]) == false) {
				showValidate(input[i]);
				check = false;
			}
		}
		if (check) {
			$.ajax({
				type: "POST",
				url: baseurl +"login/Login/login_validate",
				data: {
					phone: $('input[name="phone"]').val(),
					password: $('input[name="password"]').val(),
				},
				success: function (result) {
					var response = JSON.parse(result);
					console.log(response["status"]);
					if (response["status"] == 200) {
						$("#msg-fail").addClass("d-none");
						$("#msg-fail").text("");
						$(location).prop("href", baseurl+"profile");
					} else {
						$("#msg-fail").removeClass("d-none");
						$("#msg-fail").text(response["message"]);
					}
				},
				error: function (result) {
					console.log("error: " + result);
				},
			});
		}
		return false;
	});

	$(
		".validate-form .input100,.forgot-form .input100,.reset-form .input100,.change-form .input100"
	).each(function () {
		$(this).focus(function () {
			hideValidate(this);
		});
	});

	function validate(input) {
		if ($(input).attr("name") == "phone") {
			if (
				$(input)
					.val()
					.trim()
					.match(
						/^\+?\d{1,4}?\s?\(?\d{1,4}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/
					) == null
			) {
				return false;
			}
		}
		if ($(input).attr("name") == "password") {
			if ($('input[name="password"]').val().trim() == "") {
				return false;
			}
		}
	}

	function showValidate(input) {
		var thisAlert = $(input).parent();

		$(thisAlert).addClass("alert-validate");
	}

	function hideValidate(input) {
		var thisAlert = $(input).parent();

		$(thisAlert).removeClass("alert-validate");
		$("#msg-fail").text("");
	}
})(jQuery);
