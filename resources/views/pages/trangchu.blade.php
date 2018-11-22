@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content_hot">
		<p class="module_title">Tin nổi bật</p>
		<ul class="list_pro">
			@foreach($baidangnoibat as $baidang)
				@if( count($baidang->anh) != 0)
				<li>
					<?php $tenanh= $baidang->anh->first();?>
					<a class="img" href="">
						<img width="15px" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					<a class="title" href="">
						{{$baidang->title}}
					</a>
					<p class="price">{{$baidang->price}}</p>
				</li>
				@endif
			@endforeach
		</ul>
		<div class="clear"></div>
	</div>


	@foreach($loaiphong as $lp)
		<div class="module_title">
			<a href="">
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
					@if( count($baidang->anh) != 0)
					<?php $tenanh= $baidang->anh->first();?>
					<a class="img" href="">
						<img alt="" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					@endif
					<div class="info">
						<p class="info2">
							<span class="info2_lable3 price">{{ $baidang->price}}</span>
						</p>
						<h3 class="title">
							<a
								href="">{{ $baidang->title }}</a>
						</h3>
						<div class="intro">{{ $baidang->chitietphong->description }}</div>
						<div class="group2">
							<p class="info_adrr">
								<span class="info2_lable">Địa chỉ :</span> <span
									class="info2_lable3"> <a
									title=""
									href="">{{ $baidang->address }}</a>
								</span>
							</p>
						</div>
						<div class="group2">
							<p class="info3">
								<span class="info2_lable">Diện tích : </span> <span
									class="info2_lable3">{{ $baidang->chitietphong->aceage }}</span>
							</p>
							<p class="info4">
								<span class="info2_lable">Quận/Huyện : </span> <span
									class="info2_lable3"> <a
									title="Cho thuê chung cư, nhà trọ, phòng trọ tại Quận 7"
									href="https://dithuenha.com/cho-thue-chung-cu-nha-tro-tai-quan-7-pci132.htm">{{ $baidang->address }}</a>
								</span> <span class="time">07/11/2018</span>
							</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		@endforeach
	@endforeach
</div>
@endsection