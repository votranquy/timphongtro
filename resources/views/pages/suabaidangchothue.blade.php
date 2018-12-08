@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Sửa bài cho thuê</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="user/baidang/baichothue/sua/{{$baidang->id}}" class="user_form "  enctype="multipart/form-data">
	            	@csrf
	               <div class="item">
	                  <label>Tiêu đề tin <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="title" class="pro_title" type="text" id="" value="{{$baidang->title}}" placeholder="Cho thuê nhà trọ, phòng trọ ở đâu..." style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	              <div class="item">
	                  <label>Loại phòng <span class="red">(*)</span></label>
	                  <div class="item_input">
	                        <select class="pro_title" name="roomtype" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
                                @foreach($loaiphong as $lp)
                                    <option value="{{$lp->id}}"
										@if($baidang->room_type_id == $lp->id)
                                            {{"selected"}}
                                        @endif
                                     >{{$lp->name}}</option>
                                @endforeach
                            </select>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Số điện thoại để liên hệ</label>
	                  <div class="item_input">
	                     <input  name="phone" class="pro_title" type="text" id="" value="{{$baidang->phone}}" placeholder="Nhập số điện thoại của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập mô tả (điều kiện, diện tích, an ninh, ...)<span class="red">(*)</span></label>
	                  <div class="item_input">
                            <textarea class="pro_title" value="" type="text" name="description" placeholder="Nhập nội dung " style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%;">{{$baidang->chitietphong->description}}</textarea>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mức giá (tháng) <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="price" class="pro_title" type="text" id="" value="{{$baidang->price}}" placeholder="Nhập mức giá" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập diện tích</label>
	                  <div class="item_input">
	                     <input  name="aceage" class="pro_title" type="text" id="" value="{{$baidang->chitietphong->aceage}}" placeholder="Nhập diện tích" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập địa chỉ</label>
	                  <div class="item_input">
	                     <input  name="address" class="pro_title" type="text" id="" value="{{$baidang->address}}" placeholder="Nhập địa chỉ" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>

					<div class="item">
						<label>Chọn ảnh</label><br>
						<?php $i=1; ?>
						@foreach($baidang->anh as $anh)
						        <div class="">
						          <div class="control-group input-group" style="margin-top:10px">
						          	<img src="storage/tintuc/{{$anh->path}}" width="150px" height="100px"><br>
									<input type="hidden" name="oldimage[]" class="form-control" value="{{$anh->path}}">
						            <div class="input-group-btn" style="padding-bottom: 0;">
						              <button class="btn btn-remove" type="button"><i class="glyphicon glyphicon-remove"></i> Move
						              </button>
						            </div>
						          </div>
						        </div>
						        <?php $i++; ?>
				        @endforeach
						<br>
				        <div class="input-group control-group increment" >
				         <!--  <input type="file" name="image[]" class="form-control"  /> -->
				          <div class="input-group-btn">
				            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm ảnh</button>
				          </div>
				        </div>
				        <div class="clone hide">
				          <div class="control-group input-group" style="margin-top:10px">
				            <input type="file" name="image[]" class="form-control" multiple />
				            <div class="input-group-btn">
				              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
				            </div>
				          </div>
				        </div>
					</div>

	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Sửa bài</button>
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
                    title:{
                        required:true,
                        minlength: 30,
                    },
					phone:{
                        required:true,
                        number: true,
                        minlength:10,
                        maxlength:10,
                    },
                    description:{
                        required:true,
						minlength: 100,
						maxlength: 500,
                    },
					price:{
                        required:true,
                        number: true,
                    },
					aceage:{
                        required:true,
                        number: true,
                    },
					address:{
                        required:true,
                    },
					"image[]":{
                        required:true,
                        accept: "image/*",
                    },
                },
                messages:{
                    title:{
                        required:"Vui lòng nhập tiêu đề",
                        minlength: "Tiêu đề phải có ít nhất 30 ký tự",
                    },
					phone:{
                        required:"Vui lòng nhập số điện thoại",
                        number: "Số điện thoại chỉ gồm số",
                        minlength: "Số điện thoại không hợp lệ",
                        maxlength: "Số điện thoại không hợp lệ",
                    },
                    description:{
                        required: "Vui lòng nhập mô tả tin",
						minlength: "Mô tả phải ít nhất 100 ký tự",
						maxlength: "Mô tả không được quá 500 ký tự",
                    },
					price:{
                        required:"Vui lòng nhập giá tiền",
                        number: "Giá tiền không đúng định dạng",
                    },
					aceage:{
                        required:"Vui lòng nhập diện tích",
                        number: "Diện tích phải là một số",
                    },
					address:{
                        required:"Vui lòng nhập địa chỉ",
                    },
					"image[]":{
                        required:"Vui lòng nhập hình ảnh",
                        accept:"File ảnh không hợp lệ",
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
      $("body").on("click",".btn-remove",function(){ 
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