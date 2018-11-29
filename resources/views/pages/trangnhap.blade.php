<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS & JS -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<!-- 		<script src="js/validate.jss"></script> -->
	</head>

	<body>
<form method="POST" action="#" role="form" id="form-login">
   <legend>Login</legend>
    @if(session('thongbao'))
        <div class="alert alert-danger">
            {{session('thongbao')}}
        </div>
    @endif
   <div class="alert alert-danger error errorLogin" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      <p style="color:red;display:none;" class="error errorLogin"></p>
   </div>

   <div class="form-group">
      <label for="">Email</label>
      <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{old('email')}}">
      <p style="color:red; display:none;" class="error errorEmail"></p>

   </div>

   <div class="form-group">
      <label for="">Password</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password" value="{{old('password')}}">
      <p style="color:red;" class="error errorPassword"></p>

   </div>

   <div class="form-group">
      <input type="checkbox" name="remember"> Ghi nhớ
   </div>
   @csrf
   <button type="submit" id="dang-nhap" class="btn btn-primary">Đăng nhập</button>
</form>
	</body>
<script>
	$(function(){
		$('#dang-nhap').click(function(e){
			e.preventDefault();
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				'url' : 'login',
				'data':{
					'email':$('#email').val(),
					'password':$('#password').val()
				},
				'type':'POST',
				success: function(data){
					console.log(data);
					if(data.error == true){
						$('.error').hide();
						if(data.message.email != undefined){
							$('.errorEmail').show().text(data.message.email[0]);
						}
						if(data.message.password != undifined){
							$('.errorPassword').show().text(data.message.password[0]);
						}
					}
				}
			});

		})
	});
	</script>
</html>