$(function() {
		$('#form-login').validate({
			rules : {
				email : {
					required : true,
					email : true
				},
				password : {
					required : true,
					minlength : 8
				}
			},
			messages : {
				email : {
					required : "Email không được để trống",
					email : "Email không đúng định dạng",
				},
				password : {
					required : "Mật khẩu không được để trống",
					minlength : "Mật khẩu phải có ít nhất 8 ký tự"
				}
			},
			submitHandler : function () {
				//code in here
				console.log('xxx');
			}

		});
	})