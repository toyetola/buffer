<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/auth.sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 08:40:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="token" content="{{csrf_token()}}">
    <title>Test Site | Sign In</title>
    <!-- ================== GOOGLE FONTS ==================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <!-- ======================= GLOBAL VENDOR STYLES ========================-->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.css')}}">

    <!-- ======================= LINE AWESOME ICONS ===========================-->
    {{--<link rel="stylesheet" href="{{asset('css/icons/line-awesome.min.css')}}">--}}
    <!-- ======================= DRIP ICONS ===================================-->
    {{--<link rel="stylesheet" href="{{asset('css/icons/dripicons.min.css')}}">--}}
    <!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->

    <!-- ======================= LAYOUT TYPE ===========================-->
    {{--<link rel="stylesheet" href="{{asset('css/layouts/vertical/core/main.css')}}">
    <!-- ======================= MENU TYPE ===========================================-->
    <link rel="stylesheet" href="{{asset('css/layouts/vertical/menu-type/content.css')}}">
    <!-- ======================= THEME COLOR STYLES ===========================-->
    <link rel="stylesheet" href="{{asset('css/layouts/vertical/themes/theme-i.css')}}">--}}
</head>

<body class="content-menu">
<div class="container">

    <form class="sign-in-form" action="" method="post">
		{{csrf_field()}}
		{{--@include('Includes.messages')--}}
        <div class="card">
            <div class="card-body">
                	<a href="" class="brand text-center d-block m-b-20">
                    	{{--<img src="{{asset('img/qt-logo%402x.png" alt="QuantumPro Logo')}}" />--}}
						<strong style="color: #be0000; size: 60px">Test</strong>
					</a>
				{{--{{bcrypt('123456')}}--}}
					<h5 class="sign-in-heading text-center m-b-20">Sign in to your account</h5>
					<div class="form-group">
						<label class="sr-only">Email address</label>
						<input type="email" name="email" class="form-control" placeholder="Email address" required="required">
					</div>

					<div class="form-group">
						<label  class="sr-only">Password</label>
						<input type="password" name="password"  class="form-control" placeholder="Password" required="required">
					</div>
					<div class="checkbox m-b-10 m-t-20">
						{{--<div class="custom-control custom-checkbox checkbox-success form-check">
							<input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
							<label class="custom-control-label" for="stateCheck1">	Remember me</label>
						</div>--}}
						<a href="{{route('register')}}" class="">New User?</a>
					</div>
					<button class="btn btn-success btn-rounded btn-floating btn-lg btn-block" id="sub">Sign In</button>
				 {{--<p class="text-muted m-t-25 m-b-0 p-0">Don't have an account yet?<a href="auth.register.html"> Create an account</a></p>--}}
				</div>

			</div>
		</form>
	</div>

	<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->

	<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('vendor/js-storage/js.storage.js')}}"></script>
	<script src="{{asset('vendor/js-cookie/src/js.cookie.js')}}"></script>

	{{--<script src="{{asset('vendor/switchery-npm/index.js')}}"></script>--}}

	<script>
	{{--{{route('account.login')}}--}}
		$(document).on('click', '#sub', function (e) {
		    e.preventDefault();
			let email = $('input[name=email]').val();
			let password = $('input[name=password]').val();
			let _token = "{{csrf_token()}}";
			let object = {email: email, password: password, _token: _token}
        	console.log(object);
			$.post("{{url('/')}}/api/login", object, function (data) {
				console.log(data);
				if(data.status = "logged in"){
				    if(localStorage.getItem('token')){
                        localStorage.removeItem('token');
					}
					localStorage.setItem('token', data.token);
					location.href = "{{url('/')}}/dashboard"
				}else if(data.error){
                    alert('Wrong username or password');
				}else{
				    alert('Wrong username or password');
				}
            }).then('error', function () {
                alert('Wrong username or password');
            });
    	})

	</script>

</body>


</html>
