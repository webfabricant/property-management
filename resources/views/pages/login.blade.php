<html>
	<head>
	<meta charset='utf-8'>
	<title>Real Estate - Login</title>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" >
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9]>
	<link href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	<script src="{{asset('assets/js/jquery-1.7.2.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	</head>
	<body class="login">
		<div id="login">
			<div class="tab_wrapper">
				<div class="tabs">
					<div class="tab tab_1 active">Login</div>
					<div class="tab tab_2">Register</div>
				</div>
				<div class="tab_block tab_block_1 active">
					<div class="cover"></div>
					<form action="{{ route('index') }}">
						<div>
							<input type="email" placeholder="Email" name="email" >
							<input type="password" placeholder="******" name="password" >
							<div class="right login"><input type="submit" value="login"></div>
						</div>
					</form>
				</div>
				<div class="tab_block tab_block_2">
					<div class="cover"></div>
					<form action="{{ route('login') }}">
						<div>
							<input type="text" placeholder="Login" name="login" >
							<input type="text" placeholder="Name" name="name" >
							<input type="password" placeholder="******" name="password" >
							<input type="email" placeholder="Email" name="email" >
							<div class="right register"><input type="submit" value="login"></div>
						</div>
					</form>
				</div>
			</div><!--end of #tab_wrapper-->
		</div><!--end of #login-->
	</body>
</html>
