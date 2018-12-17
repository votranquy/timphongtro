<!DOCTYPE html PUBLIC>



<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Cho thuê nhà trọ, cho thuê phòng trọ giá rẻ, cho thuê
	chung cư, cho thuê chung cư mini, cho thuê nhà nguyên căn</title>
<base href="{{asset('') }}">

	<style type="text/css" media="screen">
		.error{
			color: red;
			display: block;
			width:100%;
		}
	</style>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


	<link rel="shortcut icon"
	href="index_files/pqd1541408742.png"
	type="image/x-icon">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@yield('link')




<link rel="stylesheet" type="text/css"
	href="index_files/font-awesome.min.css">
<link
	href="index_files/style.css"
	rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<!-- <link href="css/shop-homepage.css" rel="stylesheet"> -->
<link href="css/my.css" rel="stylesheet">
</head>

	<body class="hold-transition skin-blue sidebar-mini">
	<div id="wrapper" class="wrapper">
		<h1 class="page_h1">Cho thuê nhà trọ, cho thuê phòng trọ giá rẻ,
			cho thuê chung cư, cho thuê chung cư mini, cho thuê nhà nguyên căn</h1>
		<div id="id_back_top"></div>
		<!-- Header -->
		@include('layout.header')
		<!--./Header -->
		<!-- search -->
		@include('layout.search')
		<!-- ./search -->

		<div class="content mainContent">
			<div class="container ">
				<div class="content">
				    <!-- Page Content -->
				    @yield('content')
				    <!-- ./Page Content -->
				    <!-- Right Menu -->
				    @include('layout.menu')
				    <!-- ./Right Menu -->
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="content footer">
		</div>
		<div id="top_page" style="display: none;"></div>
		<div class="footer_copy">
			<div class="container">Copyright © 2018 </div>
		</div>
		<div class="footer_wrap_bg footer_popup"></div>

		<div class="clear"></div>
	</div>
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
	 @yield('script')

</body>

</html>