@extends('layout.index')
@section('content')
		<!-- Search -->
<!-- 		@include('layout.search') -->
<div class="module1">
	<div class="module1_content_hot">
		<p class="module_title">Tin nổi bật</p>
		<ul class="list_pro">
			@foreach($baidangnoibat as $baidang)
				@if( count($baidang->anh) != 0)
				<li>
					<?php $tenanh= $baidang->anh->first();?>
					<a class="img" href="baidang/{{$baidang->id}}">
						<img width="15px" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					<a class="title" href="baidang/{{$baidang->id}}">
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
				{{ $lp->name }}
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
					<a class="img" href="baidang/{{$baidang->id}}">
						<img alt="" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					@endif
					<div class="info">
						<p class="info2">
							<span class="info2_lable3 price">Giá: {{ $baidang->price}}</span>
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
							<p class="info_adrr">
								<span class="info2_lable">Mô tả :</span> <span
									class="info2_lable">{{ $baidang->chitietphong->description }}
								</span>
							</p>
						</div>
						<div class="group2">
							<p class="info3">
								<span class="info2_lable">Diện tích : </span> <span
									class="info2_lable3">{{ $baidang->chitietphong->aceage }}</span>
							</p>
							<p class="info4">
								 <span class="time">{{ $baidang->created_at }}</span>
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
@section('script')

@endsection