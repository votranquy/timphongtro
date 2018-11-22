@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content_hot">
		<p class="module_title">Tin nổi bật</p>
		<ul class="list_pro">
			@foreach($baidangnoibat as $bd)
				@if( count($bd->anh) != 0)
				<li>
					<a class="img" href="">
						<img alt="" src="upload/tintuc/{{$bd->anh->paths}}">
					</a>
					<a class="{{$bd->title}}" href="">
						{{$bd->title}}
					</a>
					<p class="price">{{$bd->price}}</p>
				</li>
				@endif
			@endforeach
		</ul>
		<div class="clear"></div>
	</div>


	@foreach($loaiphong as $lp)
		<div class="module_title">
			<a
				href="">
				<h2>{{ $lp->name }}</h2>
			</a>
		</div>
		<?php
		$baidang = $lp->baidang->where('post_type_id',2)->take(5);
		?>	
		@foreach($baidang as $baidang)
		<div class="module1_content">
			<ul class="list_pro">
				<li class="pro_item">

					<div class="info">
						<p class="info2">
							<span class="info2_lable3 price">{{ $baidang->price }}</span>
						</p>
						<h3 class="title">
							<a
								href="">{{ $baidang->title }}</a>
						</h3>
						<div class="intro">{{ $baidang->title }}</div>
						<div class="group2">
							<p class="info_adrr">
								<span class="info2_lable">Địa chỉ : </span> <span
									class="info2_lable3"> <a
									title="Cho thuê chung cư, nhà trọ, phòng trọ tại Địa chỉ 142/46, đường Nguyễn Thị Thập, Phường Bình Thuận, Quận 7, Hồ Chí Minh"
									href="https://dithuenha.com/cho-thue-chung-cu-nha-tro-tai-quan-7-pci132.htm">{{ $baidang->address }}</a>
								</span>
							</p>
						</div>
						<div class="group2">
							<p class="info3">
								<span class="info2_lable">Diện tích : </span> <span
									class="info2_lable3">22 m2</span>
							</p>
							<p class="info4">
								<span class="info2_lable">Quận/Huyện : </span> <span
									class="info2_lable3"> <a
									title="Cho thuê chung cư, nhà trọ, phòng trọ tại Quận 7"
									href="https://dithuenha.com/cho-thue-chung-cu-nha-tro-tai-quan-7-pci132.htm">Quận
										7</a>
								</span> <span class="time">07/11/2018</span>
							</p>
						</div>
					</div></li>
				<li class="pro_item"><a class="img"
					href="https://dithuenha.com/cho-thue-phong-tro-moi-xay-18m2-dang-thi-hanh-pd2119320.htm">
						<img alt="Cho thuê phòng trọ mới xây 18m2 - đặng thị hạnh"
						src="index_files/hcn1541578778.jpg">
				</a>
					<div class="info">
						<p class="info2">
							<span class="info2_lable3 price">2.5 triệu</span>
						</p>
						<h3 class="title">
							<a
								href="https://dithuenha.com/cho-thue-phong-tro-moi-xay-18m2-dang-thi-hanh-pd2119320.htm">Cho
								thuê phòng trọ mới xây 18m2 - đặng thị hạnh</a>
						</h3>
						<div class="intro">Chính chủ cho thuê phòng trọ đẹp (vừa
							xây xong) tại Phố Phùng Chí Kiên-Hoàng Quốc Việt -Phòng có
							diện tích trên 18m2, có cửa sổ -Tầng 1 để xe rộng rãi , có
							camera an ninh từng tầng nên rất an toàn , miễn phí gửi xe
							-Phòng có công trình phụ khép kín , có bếp đun nấu , giờ giấc
							đi lại thoải mái rất ...</div>
						<div class="group2">
							<p class="info_adrr">
								<span class="info2_lable">Địa chỉ : </span> <span
									class="info2_lable3"> <a
									title="Cho thuê chung cư, nhà trọ, phòng trọ tại Quận Cầu Giấy"
									href="https://dithuenha.com/cho-thue-chung-cu-nha-tro-tai-quan-cau-giay-pci98.htm">Quận
										Cầu Giấy</a>
								</span>
							</p>
						</div>
						<div class="group2">
							<p class="info3">
								<span class="info2_lable">Diện tích : </span> <span
									class="info2_lable3">18 m2</span>
							</p>
							<p class="info4">
								<span class="info2_lable">Quận/Huyện : </span> <span
									class="info2_lable3"> <a
									title="Cho thuê chung cư, nhà trọ, phòng trọ tại Quận Cầu Giấy"
									href="https://dithuenha.com/cho-thue-chung-cu-nha-tro-tai-quan-cau-giay-pci98.htm">Quận
										Cầu Giấy</a>
								</span> <span class="time">07/11/2018</span>
							</p>
						</div>
					</div></li>
			</ul>
			<div class="clear"></div>
		</div>
		@endforeach
	@endforeach
</div>
@endsection