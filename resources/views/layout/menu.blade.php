<div class="module2">
	<div class="module2_content">
		<div class="right_news">
			<div class="module_title">
				<span>Tin đăng chính chủ</span>
			</div>
			<ul class="list">
				@foreach($baichinhchu as $bcc)
				<li>
					@if( count($bcc->anh) != 0)
					<?php $tenanh= $bcc->anh->first();?>
					<a class="img" href="" title="">
						<img alt="" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					<a class="title" href="">
						{{ $bcc->title }}
					</a>
					<p class="price">{{ $bcc->price }}</p>
					@endif
				</li>
				@endforeach
			</ul>
		</div>
		<div class="right_news">
			<div class="module_title">
				<span>Mới đăng</span>
			</div>

			<ul class="list">
				@foreach($baimoi as $bm)
				<li>
					<?php $tenanh= $bm->anh->first();?>
					<a class="img" href="" title="">
						<img alt="" src="upload/tintuc/{{$tenanh->path}}">
					</a>
					<a class="title" href="">
						{{$bm->title}}
					</a>
					<!-- <p class="price">{{$bm->chitietphong->price}}</p> -->
				</li>
				@endforeach
			</ul>
		</div>

	</div>
</div>