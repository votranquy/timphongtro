<div class="module2">
	<div class="module2_content">
		<div class="right_news">
			<div class="module_title">
				<span>Tin đăng chính chủ</span>
			</div>
			<ul class="list">
				@foreach($baichinhchu as $bcc)
					@if( count($bcc->anh) != 0)
						<li>
							<?php $tenanh= $bcc->anh->first();?>
							<a class="img" href="" title="">
								<img alt="" src="upload/tintuc/{{$tenanh->path}}">
							</a>
							<a class="title" href="">
								{{ $bcc->title }}
							</a>
							<p class="price">{{ $bcc->price }}</p>
						</li>
					@endif
				@endforeach
			</ul>
		</div>
		<div class="right_news">
			<div class="module_title">
				<span>Mới đăng</span>
			</div>

			<ul class="list">
				@foreach($baimoi as $bm)
					@if( count($bm->anh) != 0)
						<li>
							<?php $tenanh= $bm->anh->first();?>
							<a class="img" href="baidang/{{ $bm->id }}" title="">
								<img alt="" src="upload/tintuc/{{$tenanh->path}}">
							</a>
							<a class="title" href="baidang/{{ $bm->id }}">
								{{$bm->title}}
							</a>
							<!-- <p class="price">{{$bm->chitietphong->price}}</p> -->
						</li>
					@endif
				@endforeach
			</ul>
		</div>

	</div>
</div>