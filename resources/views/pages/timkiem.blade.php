@extends('layout.index')
@section('content')
		<!-- Search -->
<!-- 		@include('layout.search') -->
<div class="module1">
		<div class="module_title">
			<a href="">
				<h2>Kết quả tìm kiếm</h2>
			</a>
		</div>

		@foreach($baidang as $baidang)
		<div class="module1_content">
			<ul class="list_pro">
				<li class="pro_item">
					@if( count($baidang->anh) != 0)
					<?php $tenanh= $baidang->anh->first();?>
					<a class="img" href="baidang/{{$baidang->id}}">
						<img alt="" src="storage/tintuc/{{$tenanh->path}}">
					</a>
					@endif
					<div class="info">
						<p class="info2">
							<span class="info2_lable3 price">{{ $baidang->price}}</span>
						</p>
						<h3 class="title">
							<a
								href="baidang/{{$baidang->id}}">{{ $baidang->title }}</a>
						</h3>
						<div class="intro">
						</div>
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
									title=""
									href="">{{ $baidang->address }}</a>
								</span> <span class="time">{{ $baidang->created_at }}</span>
							</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		@endforeach

</div>
@endsection
@section('script')

@endsection