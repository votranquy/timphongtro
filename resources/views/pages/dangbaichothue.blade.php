@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Đăng bài cho thuê</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="dangbaichothue/2" class="user_form "  enctype="multipart/form-data">
	            	@csrf
	               <div class="item">
	                  <label>Tiêu đề tin <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="title" class="pro_title" type="text" id="pro_title" value="" placeholder="Cho thuê nhà trọ, phòng trọ ở đâu..." style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	              <div class="item">
	                  <label>Loại phòng <span class="red">(*)</span></label>
	                  <div class="item_input">
	                        <select class="pro_title" name="roomtype" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
                                @foreach($loaiphong as $lp)
                                    <option value="{{$lp->id}}">{{$lp->name}}</option>
                                 @endforeach
                            </select>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Số điện thoại để liên hệ</label>
	                  <div class="item_input">
	                     <input  name="phone" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập số điện thoại của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập mô tả (điều kiện, diện tích, an ninh, ...)<span class="red">(*)</span></label>
	                  <div class="item_input">
                            <textarea class="pro_title" value="" type="text" name="description" placeholder="Nhập nội dung " style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%;"></textarea>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mức giá (tháng) <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="price" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập mức giá" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập diện tích</label>
	                  <div class="item_input">
	                     <input  name="aceage" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập diện tích" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập địa chỉ</label>
	                  <div class="item_input">
	                     <input  name="address" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập địa chỉ" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Tải ảnh (có thể chọn nhiều)</label>
	                  <div class="item_input">
	                     <input  name="image[]" class="pro_title" type="file" id="pro_title" value="" multiple="multiple" placeholder="Chọn ảnh" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Đăng bài</button>
	              </div>
	          </form>
			</div>
		</div>
	</div>
</div>


<!-- <form>
  <input type="text" class="form-control" name="maps_address" id="maps_address" value="" placeholder="Nhập tên địa điểm cần tìm">
  <div id="maps_maparea">
      <div id="maps_mapcanvas" style="margin-top:10px;" class="form-group"></div>
      <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">L</span>
                  <input type="text" class="form-control" name="maps[maps_mapcenterlat]" id="maps_mapcenterlat" value="{maps_mapcenterlat}" readonly="readonly">
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">N</span>
                  <input type="text" class="form-control" name="maps[maps_mapcenterlng]" id="maps_mapcenterlng" value="{maps_mapcenterlng}" readonly="readonly">
              </div>
             </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">L</span>
                  <input type="text" class="form-control" name="maps[maps_maplat]" id="maps_maplat" value="{maps_maplat}" readonly="readonly">
              </div>
             </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">N</span>
                  <input type="text" class="form-control" name="maps[maps_maplng]" id="maps_maplng" value="{maps_maplng}" readonly="readonly">
              </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">Z</span>
                  <input type="text" class="form-control" name="maps[maps_mapzoom]" id="maps_mapzoom" value="{maps_mapzoom}" readonly="readonly">
              </div>
             </div>
          </div>
      </div>
  </div>
</form> -->
@endsection
@section('script')
<script>
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
</script>
@endsection