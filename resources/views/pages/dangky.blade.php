<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up for TROTOT</title>






    <style type="text/css" media="screen">
        .error{
            color: red;
            display: block;
            width:100%;
        }
    </style>
   <link rel="stylesheet" type="text/css" href="LoginPage/vendor/bootstrap/css/bootstrap.min.css">


    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script> -->
    <!-- Font Icon -->
    <link rel="stylesheet" href="RegisterPage/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="RegisterPage/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <h2 class="form-title">Create account</h2>
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div style="width: 100%;" class="alert alert-danger">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <form action="dangky" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="dangnhap" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
<!--     <script src="LoginPage/vendor/jquery/jquery.min.js"></script>
    <script src="LoginPage/js/main.js"></script> -->

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.signup-form').validate({
                rules:{
                    name:{
                        required:true,
                        minlength:8,
                    },
                    email:{
                        required:true,
                        email: true,
                        minlength:8,
                    },
                    password:{
                        required:true,
                        minlength:8,
                    },
                    re_password:{
                        required:true,
                        equalTo: "#password",
                    },
                },
                messages:{
                    name:{
                        required: 'Vui lòng nhập tên ',
                        minlength:'Tên có độ dài tối thiểu 8 kí tự',
                    },
                    email:{
                        required: 'Vui lòng nhập Email ',
                        email: 'Email bạn nhập không đúng định dạng',
                        minlength:'Email có độ dài tối thiểu 8 kí tự',
                    },
                    password:{
                        required:'Vui lòng nhập password',
                        minlength:'Password có độ dài tối thiểu 8 kí tự',
                    },
                    re_password:{
                        required:'Vui lòng nhập password',
                        equalTo:'Password không khớp',
                    },

                },
                // errorElement:'div',
                // errorLabelContainer: '.error'
            });
        });
    </script>




</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>