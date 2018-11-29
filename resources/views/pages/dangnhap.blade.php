<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="LoginPage/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="LoginPage/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginPage/css/util.css">
	<link rel="stylesheet" type="text/css" href="LoginPage/css/main.css">
	<style type="text/css" media="screen">
		.error{
			color: red;
			display: block;
			width:100%;
		}
	</style>
<!--===============================================================================================-->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" charset="utf-8" async defer></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script src="js/validate.jss"></script>  -->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('LoginPage/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">

				<form class="login100-form validate-form flex-sb flex-w form-class" method="post" action="dangnhap" id="form-login">
					@csrf
					<span class="login100-form-title p-b-53">
						Sign In
					</span>
		                @if(count($errors)>0)
		                    <div class="alert alert-danger">
		                        @foreach($errors->all() as $err)
		                            {{$err}}<br>
		                        @endforeach
		                    </div>
		                @endif

		                @if(session('thongbao'))
		                    <div style="width: 100%;" class="alert alert-success">
		                        {{session('thongbao')}}
		                    </div>
		                @endif
		               	@if(session('baoloi'))
		                    <div style="width: 100%;" class="alert alert-danger">
		                        {{session('baoloi')}}
		                    </div>
		                @endif

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					
						<input class="" type="text" id="email" placeholder="email" name="email" value="{{old('email')}}" style="width: 100%;height: 60px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #e6e6e6;border-radius: 10px;box-sizing: border-box;background-color: #f7f7f7;">
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
	<!-- 					<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a> -->
					</div>
					<!-- <div class="wrap-input100 validate-input"> -->
						<input class="input100" type="password" id="password" placeholder="password" name="password" style="width: 100%;height: 60px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #e6e6e6;border-radius: 10px;box-sizing: border-box;background-color: #f7f7f7;">
						<!-- <span class="focus-input100"></span>					 -->
						
					<!-- </div> -->
					<div class="clear"></div>
					
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" id="dang-nhap">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="dangky" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>





	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.form-class').validate({
                rules:{
                    email:{
                        required:true,
                        email: true,
                        minlength:8,
                    },
                    password:{
                        required:true,
                    },
                },
                messages:{
                    email:{
                        required: 'Vui lòng nhập Email ',
                        email: 'Email bạn nhập không đúng định dạng',
                        minlength:'Email có độ dài tối thiểu 8 kí tự',
                    },
                    password:{
                        required:'Vui lòng nhập password',
                    },

                },
                // errorElement:'div',
                // errorLabelContainer: '.error'
            });
        });
    </script>

</body>
</html>