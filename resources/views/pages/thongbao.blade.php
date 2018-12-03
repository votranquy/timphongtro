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
					<form action="xemthongbao/{{$tb->post_id}}/{{$tb->id}}" method="post" accept-charset="utf-8">
						@csrf
							<button type="submit" style="background-color:@if($tb->isRead == 0) #eee @else white @endif
							;border: none;text-align: left;">Có bình luận mới về bài đăng</button>								  <span class="time"><i><?php $time=$tb->created_at; echo time_ago_in_php($time);?></i>
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