@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Thông tin cá nhân</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="user/profile/sua" class="user_form"  enctype="multipart/form-data">
	            	@csrf
					<div class="item">
						@if(Auth::user()->image != NULL)
						<img src="upload/tintuc/{{$user->image}}" width="150px" height="100px"><br>
						@endif
						<label>Ảnh đại diện</label>
	                  	<div class="item_input">
	                     	<input  name="image[]" class="pro_title" type="file" id="" value="" placeholder="Chọn ảnh đại diện mới" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  	</div>
        			</div>
	               <div class="item">
	                  <label>Tên </label>
	                  <div class="item_input">
	                     <input  name="name" class="pro_title" type="text" id="" value="{{$user->name}}" placeholder="Nhập tên" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	              <div class="item">
	                  <label>Địa chỉ</label>
	                  <div class="item_input">
	                       <input  name="address" class="pro_title" type="text" id="" value="{{$user->address}}" placeholder="Nhập địa chỉ" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Số điện thoại</label>
	                  <div class="item_input">
	                     <input  name="phone" class="pro_title" type="text" id="" value="{{$user->phone}}" placeholder="Nhập số điện thoại của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Email</label>
	                  <div class="item_input">
                           <input  name="email" class="pro_title" type="text" id="" value="{{$user->email}}" placeholder="Nhập email của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;" disabled="">
	                  </div>
	              </div>
	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Cập nhật</button>
	              </div>
	          </form>
			</div>
		</div>
	</div>
</div>
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Đổi mật khẩu</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="user/profile/doimatkhau" class="password_form "  enctype="multipart/form-data">
	            	@csrf
	               <div class="item">
	                  <label>Email</label>
	                  <div class="item_input">
                           <input  name="email" class="pro_title" type="text" id="" value="{{$user->email}}" placeholder="Nhập email của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;" disabled="">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mật khẩu cũ</label>
	                  <div class="item_input">
	                     <input  name="oldpassword" class="pro_title" type="password" id="oldpassword" value="" placeholder="Nhập mật khẩu hiện tại" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mật khẩu mới</label>
	                  <div class="item_input">
	                     <input  name="newpassword" class="pro_title" type="password" id="newpassword" value="" placeholder="Nhập mật khẩu mới" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập lại mật khẩu mới</label>
	                  <div class="item_input">
	                     <input  name="renewpassword" class="pro_title" type="password" id="renewpassword" value="" placeholder="Nhập lại mật khẩu mới" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Cập nhật</button>
	              </div>
	          </form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.user_form').validate({
                rules:{
					phone:{
                        number: true,
                        minlength:10,
                        maxlength:10,
                    },
					image:{
                        accept: "image/*",
                    },
                },
                messages:{
					phone:{
                        number: "Số điện thoại chỉ gồm số",
                        minlength: "Số điện thoại không hợp lệ",
                        maxlength: "Số điện thoại không hợp lệ",
                    },
					image:{
                        accept:"File ảnh không hợp lệ",
                    },
                },
            });
        });
</script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.password_form').validate({
                rules:{
					oldpassword:{
                        required: true,
                        minlength:8,
                    },
					newpassword:{
                        required: true,
                        minlength:8,
                    },
                   	renewpassword:{
                        required: true,
                        equalTo: "#newpassword",
                    },
                },
                messages:{
					oldpassword:{
                        required: "Vui lòng nhập passworld",
                        minlength: "Password có độ dài tối thiểu 8 kí tự",
                    },
					newpassword:{
                        required: "Vui lòng nhập passworld",
                        minlength: "Password có độ dài tối thiểu 8 kí tự",
                    },
					renewpassword:{
                        required: "Vui lòng nhập passworld",
                        equalTo: "Password mới nhập không trùng khớp",
                    },
                },
            });
        });
</script>
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
</script>





<!-- script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script> -->
@endsection
@section('script')
<!-- <script>
	var map, ele, mapH, mapW, addEle, mapL, mapN, mapZ;

	ele = 'maps_mapcanvas';
	addEle = 'maps_address';
	mapLat = 'maps_maplat';
	mapLng = 'maps_maplng';
	mapZ = 'maps_mapzoom';
	mapArea = 'maps_maparea';
	mapCenLat = 'maps_mapcenterlat';
	mapCenLng = 'maps_mapcenterlng';

	// Call Google MAP API
	if( ! document.getElementById('googleMapAPI') ){
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.id = 'googleMapAPI';
		s.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&callback=controlMap';
		document.body.appendChild(s);
	}else{
		controlMap();
	}

	// Creat map and map tools
	function initializeMap(){
		var zoom = parseInt($("#" + mapZ).val()), lat = parseFloat($("#" + mapLat).val()), lng = parseFloat($("#" + mapLng).val()), Clat = parseFloat($("#" + mapCenLat).val()), Clng = parseFloat($("#" + mapCenLng).val());
		Clat || (Clat = 20.984516000000013, $("#" + mapCenLat).val(Clat));
		Clng || (Clng = 105.79547500000001, $("#" + mapCenLng).val(Clng));
		lat || (lat = Clat, $("#" + mapLat).val(lat));
		lng || (lng = Clng, $("#" + mapLng).val(lng));
		zoom || (zoom = 17, $("#" + mapZ).val(zoom));

		mapW = $('#' + ele).innerWidth();
		mapH = mapW * 3 / 4;

		// Init MAP
		$('#' + ele).width(mapW).height(mapH > 500 ? 500 : mapH);
		map = new google.maps.Map(document.getElementById(ele),{
			zoom: zoom,
			center: {
				lat: Clat,
				lng: Clng
			}
		});

		// Init default marker
		var markers = [];
		markers[0] = new google.maps.Marker({
	        map: map,
	        position: new google.maps.LatLng(lat,lng),
	        draggable: true,
	        animation: google.maps.Animation.DROP
	    });
	    markerdragEvent(markers);

		// Init search box
		var searchBox = new google.maps.places.SearchBox(document.getElementById(addEle));

		google.maps.event.addListener(searchBox, 'places_changed', function(){
		    var places = searchBox.getPlaces();

		    if (places.length == 0) {
		        return;
		    }

		    for (var i = 0, marker; marker = markers[i]; i++) {
		        marker.setMap(null);
		    }

		    markers = [];
		    var bounds = new google.maps.LatLngBounds();
		    for (var i = 0, place; place = places[i]; i++) {
		        var marker = new google.maps.Marker({
			        map: map,
			        position: place.geometry.location,
			        draggable: true,
			        animation: google.maps.Animation.DROP
		        });

		        markers.push(marker);
		        bounds.extend(place.geometry.location);
		    }

	        markerdragEvent(markers);
		    map.fitBounds(bounds);
			console.log( places );
		});

		// Add marker when click on map
		google.maps.event.addListener(map, 'click', function(e) {
		    for (var i = 0, marker; marker = markers[i]; i++) {
		        marker.setMap(null);
		    }

		    markers = [];
			markers[0] = new google.maps.Marker({
		        map: map,
		        position: new google.maps.LatLng(e.latLng.lat(), e.latLng.lng()),
		        draggable: true,
		        animation: google.maps.Animation.DROP
		    });

		    markerdragEvent(markers);
		});

		// Event on zoom map
		google.maps.event.addListener(map, 'zoom_changed', function() {
		    $("#" + mapZ).val(map.getZoom());
		});

		// Event on change center map
		google.maps.event.addListener(map, 'center_changed', function() {
		    $("#" + mapCenLat).val(map.getCenter().lat());
		    $("#" + mapCenLng).val(map.getCenter().lng());
		    console.log( map.getCenter() );
		});
	}

	// Show, hide map on select change
	function controlMap(manual){
		$('#' + mapArea).slideDown(100, function(){
			initializeMap();
		});

		return !1;
	}

	// Map Marker drag event
	function markerdragEvent(markers){
	    for (var i = 0, marker; marker = markers[i]; i++) {
		    $("#" + mapLat).val(marker.position.lat());
		    $("#" + mapLng).val(marker.position.lng());

			google.maps.event.addListener(marker, 'drag', function(e) {
			    $("#" + mapLat).val(e.latLng.lat());
			    $("#" + mapLng).val(e.latLng.lng());
			});
	    }
	}
</script> -->


  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
@endsection