@extends('layout.index')
@section('content')
		<!-- Search -->
<!-- 		@include('layout.search') -->
<div class="module1">
	<div class="module1_content_hot">
		<div class="module_title" style="background-color:#eee;font: 400 11px arial;color:#666;padding: 10px 10px;display: block;">			
			<a href="">
				TIN NỔI BẬT
			</a>
		</div>
		<ul class="list_pro" >
			@foreach($baidangnoibat as $baidang)
				@if( count($baidang->anh) != 0)
				<li>
					<?php $tenanh= $baidang->anh->first();?>
					<a class="img" href="baidang/{{$baidang->id}}">
						<img width="15px" src="storage/tintuc/{{$tenanh->path}}">
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
	<div class="content" style="border: 2px solid #ccc; border-radius: 12px;padding:10px;margin-bottom:3px;">
		<div class="module_title" style="background-color:#eee;font: 400 11px arial;color:#666;padding: 10px 10px;display: block;">
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
						<img alt="" src="storage/tintuc/{{$tenanh->path}}">
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
								  <span class="time"><?php $time=$baidang->created_at; echo time_ago_in_php($time);?>
								 </span>
							</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		@endforeach
	</div>	
	@endforeach
</div>
@endsection
@section('script')

@endsection