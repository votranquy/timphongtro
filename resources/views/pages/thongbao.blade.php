@extends('layout.index')
@section('content')

<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="module_title">
				<span>Thông báo</span>
			</div>
			<ul class="list_pro">
				@foreach($thongbao as $tb)
				<li>

					<a class="title" href="baidang/{{ $tb->post_id}}">
						Có bình luận mới về bài đăng
					</a>
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