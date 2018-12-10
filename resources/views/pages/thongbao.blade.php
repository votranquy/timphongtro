@extends('layout.index')
@section('content')

<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="module_title">
				<span>Thông báo</span>
			</div>
			@foreach($thongbao as $tb)
			<ul class="list_pro" @if($tb->isRead == 0) style="background-color:#eee;" @endif>

				<li>
					<form action="user/thongbao/xem/{{$tb->post_id}}/{{$tb->id}}" method="post" accept-charset="utf-8">
						@csrf
							<button type="submit" style="background-color:@if($tb->isRead == 0) #eee @else white @endif
							;border: none;text-align: left;">
							<i>{{$tb->user->name}}</i> đã bình luận về bài đăng <i>{{$tb->baidang->title}}</i>								  <span class="time"><i><?php $time=$tb->binhluan->created_at; echo time_ago_in_php($time);?></i>
							</span>
					</form>

				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection
@section('link')


@endsection