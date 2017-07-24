$( document ).ready(function() {
	// Changing the defaults
	window.sr = ScrollReveal({ reset: true });

	// Customizing a reveal set
	sr.reveal('.devcon-logo', { duration: 3000 });
	sr.reveal('.devcon-city-container img', { duration: 2000 });
	sr.reveal('.subsciption-form h2', { duration: 4000 });
	sr.reveal('.text-tag-container', { duration: 5000 });
	sr.reveal('.text-tag', { duration: 5000 });
	sr.reveal('.text-tag-container:after', { duration: 6000 });
	sr.reveal('.sml_thankyou', { duration: 5000 });
	sr.reveal('.subscription-text', { duration: 5000 });
	sr.reveal('a.subscription-button', { duration: 5000 });
	sr.reveal('.subsciption-form input', { duration: 5000 });
	sr.reveal('.hashtag-devcon', { duration: 8000 });
});

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}


$("#submit").on('click', function() {
	var email = $(".sml_emailinput").val();
	if(email != '') {
		if (validateEmail(email)) {
			$('#sml_subscribe_form').submit();
		} else {
			$(".result").show().text(email + " is not valid.");
			$('.sml_emailinput').css('border', '1px solid red');
		}
	} else {
		$(".result").show().text('You must enter an email adress.');
		$('.sml_emailinput').css('border', '1px solid red');
	}

	setTimeout(function(){
		$(".result").hide().text("");
		$('.sml_thankyou').hide();
		$('.sml_emailinput').css('border', '1px solid #eaeae8');
	}, 8000);
});

setTimeout(function(){
	$(".result").hide().text("");
	$('.sml_thankyou').hide();
	$('.sml_emailinput').css('border', '1px solid #eaeae8');
}, 8000);