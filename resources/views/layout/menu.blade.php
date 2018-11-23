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
					<a class="img"
					href=""
					title="">
						<img
						alt=""
						src="upload/tintuc/{{$tenanh->path}}">
					</a>
					@endif
					<a class="title"
					href="">
						{{ $bcc->title }}
					</a>
					<p class="price">{{ $bcc->price }}</p>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="right_news">
			<div class="module_title">
				<span>Mới đăng</span>
			</div>
			<ul class="list">
				<li><a class="img"
					href="https://dithuenha.com/nha-xay-hien-dai-3-tang-dg-2-thang-9-cho-thue-tran-thanh-viet-pd2119325.htm"
					title="Nhà xây hiện đại 3 tầng đg 2 tháng 9 cho thuê - trần thanh việt">
						<img
						alt="Nhà xây hiện đại 3 tầng đg 2 tháng 9 cho thuê - trần thanh việt"
						src="index_files/ctz1541578811(1).jpg">
				</a> <a class="title"
					href="https://dithuenha.com/nha-xay-hien-dai-3-tang-dg-2-thang-9-cho-thue-tran-thanh-viet-pd2119325.htm">
						Nhà xây hiện đại 3 tầng đg 2 tháng 9 cho thuê - trần thanh
						... </a>
					<p class="price">55 triệu</p></li>
				<li><a class="img"
					href="https://dithuenha.com/nr-51m-mat-tien4-6pn-3-ve-sinh-gia-re-thu-trang-pd2119324.htm"
					title="Nr 51m mặt tiền4. 6pn 3 vệ sinh ... giá rẻ - thu trang">
						<img
						alt="Nr 51m mặt tiền4. 6pn 3 vệ sinh ... giá rẻ - thu trang"
						src="index_files/qhz1541578805.jpg">
				</a> <a class="title"
					href="https://dithuenha.com/nr-51m-mat-tien4-6pn-3-ve-sinh-gia-re-thu-trang-pd2119324.htm">
						Nr 51m mặt tiền4. 6pn 3 vệ sinh ... giá rẻ - thu trang </a>
					<p class="price">18 triệu</p></li>
			</ul>
		</div>
		<div class="right_news">
			<div class="module_title">
				<span>Tin mới</span>
			</div>
			<ul class="list">
				<li><a class="img"
					href="https://dithuenha.com/5-luu-y-quan-trong-cho-sinh-vien-khi-di-thue-phong-tro-nd1964.htm"
					title="5 lưu ý quan trọng cho sinh viên khi đi thuê phòng trọ">
						<img
						alt="5 lưu ý quan trọng cho sinh viên khi đi thuê phòng trọ"
						src="index_files/yrh1521044798.JPG">
				</a> <a
					href="https://dithuenha.com/5-luu-y-quan-trong-cho-sinh-vien-khi-di-thue-phong-tro-nd1964.htm">
						5 lưu ý quan trọng cho sinh viên khi đi thuê phòng trọ </a></li>
				<li><a class="img"
					href="https://dithuenha.com/lo-hong-tu-dich-vu-nha-tro-truc-tuyen-nd1963.htm"
					title="Lỗ hổng từ dịch vụ “nhà trọ trực tuyến”"> <img
						alt="Lỗ hổng từ dịch vụ “nhà trọ trực tuyến”"
						src="index_files/vad1521044705.jpeg">
				</a> <a
					href="https://dithuenha.com/lo-hong-tu-dich-vu-nha-tro-truc-tuyen-nd1963.htm">
						Lỗ hổng từ dịch vụ “nhà trọ trực tuyến” </a></li>
			</ul>
		</div>
	</div>
</div>