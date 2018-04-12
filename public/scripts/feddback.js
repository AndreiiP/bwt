$(document).ready(function() {

    // name
		$("#name").focus(function() {
			$("#name").keyup(function(){
			if($('#name').val() == ''){
				$('#name').css('border', 'solid 1px red');
				$('#name').attr("placeholder", "enter name here");
			}else{
				$('#name').css('border', 'solid 1px #e5e5e5');
			}
		});
    });
    // //email
		$("#email").focus(function() {
			$("#email").keyup(function(){
					var email = $(this).val();
					if (email.length > 0
					&& (email.match(/.+?\@.+/g) || []).length !== 1) {
						$('#email').css('border', 'solid 1px red');
						$('#email').attr("placeholder", "enter correct email here");
					} else {
						$('#email').css('border', 'solid 1px #e5e5e5');
					}
		});
    });
    

    
});
