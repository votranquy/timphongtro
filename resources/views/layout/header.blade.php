<div class="header">
	<div class="container">
		<!-- Logo -->
		<div class="box_logo">
			<a title="logo" href="/" class="logo"> 
				<img alt="LOGO" src="index_files/pqd1541408742.png">
			</a>
		</div>
		<!-- ./Logo -->
		<!-- User Header -->
		<ul class="header_user">
			 @if(Auth::check()) 
				<li class="header_btn_post"> 
					<a class="btn_post1" href="javascript: void(0)"> 
						 Đăng tin 
					</a>
					<div class="header_post_sub"> 
						<ul> 
							<li> 
								<a href="user/baidang/baichothue/them">Đăng tin cho thuê</a> 
							</li> 
							<li> 
								<a rel="nofollow" target="_blank" href="user/baidang/baicanthue/them">Đăng tin tìm thuê</a> 
							</li> 
						</ul> 
					</div> 
				</li> 
			<!-- ./Post -->
			<!-- User header Menu -->
				<li class="header_user_loged"> 
					<a href="user/profile/xem" class="name"> 
						@if(Auth::user()->images != NULL)
						<span class="image">
							<img src="upload/tintuc/{{Auth::user()->image}}" />
						</span>
						@endif
						<b>{{Auth::user()->username}}</b> 
					</a>
					<div class="header_user_menu"> 
						<ul>
							<li class="use">
								<a href="user/profile/xem" class="name2">
									@if(Auth::user()->image != NULL)
									<span class="image">
										<img src="upload/tintuc/{{Auth::user()->image}}" />
									</span>
									@endif
									<b>{{Auth::user()->username}}</b>
								</a>
							</li>
							<li class="li_break"></li>
							<li>
								<a href="user/baidang/baichothue/them"> Đăng tin cho thuê
								</a>
							</li>
							<li>
								<a href="user/baidang/baicanthue/them">
									 Đăng tin cần thuê
								</a>
							</li>
							<li>
								<a href="user/baidang/baichothue/danhsach">
									 Quản lý tin cho thuê
								</a>
							</li>
							</li>
							<li>
								<a href="user/baidang/baicanthue/danhsach">
									 Quản lý tin cần thuê
								</a>
							</li>
							<li>
								<a href="user/binhluan/danhsach">
									 Quản lý bình luận
								</a>
							</li>
							<li class="li_break"></li>
							<li>
								<a href="user/profile/xem">
									 Thay ảnh đại diện
								</a> 
							</li> 
							<li> 
								<a href="user/profile/xem"> 
									 Cập nhật thông tin 
								</a> 
							</li> 
							<li> 
								<a href="user/profile/xem"> 
									 Đổi mật khẩu 
								</a> 
							</li> 
							<li class="li_break"></li> 
							<li>
							 <a href="dangxuat"> 
							 	 Đăng xuất 
							 </a> 
							</li> 
						</ul>
					</div>
				</li>
			<!-- ./User header Menu -->
			<!-- Notification -->
				  <li class="header_user_loged">
				    <a href="user/thongbao/danhsach" class="name">
				      	<!-- <span class="image"> -->
				      		<img alt="" width="20px" height="20px" src="upload/tintuc/bell.png">
				     <!--  	</span> -->
				      	<span class="label label-warning" style="margin-left:-5px;">
				          	<?php $dem=0;?>
				          	@foreach($demthongbao as $tb)
				          		@if($tb->user_id == Auth::user()->id)
				          		<?php $dem++; ?>
				          		@endif
				          	@endforeach

				          	<?php echo($dem);?>
				      	</span>
				    </a>
				  </li>
			<!-- ./Notification -->

			@else
			<!-- Not login -->
				<li class="header_user_nologin"><a rel="nofollow"
					href="dangnhap"
					class="login"> Đăng nhập</a> <span>/</span> <a rel="nofollow"
					href="dangky"> Đăng ký</a>
				</li>
			<!-- ./Not login -->
			@endif
		</ul>
		<!-- ./User Header -->
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div class="clear"></div>
</div>

<!-- RoomTypeHeader -->
<div class="content header_menu">
  <div class="container header_content">
    <ul class="header_menu_ul">
			<li class="header_menu_li active">
        <a class="header_menu_a"
				href="/">Trang Chủ
        </a>
      </li>
			@foreach($loaiphong as $lp)
			<li class="header_menu_li header_menu_li_3 ">
        <a class="header_menu_a header_menu_a_cat"
				href="loaiphong/{{$lp->id}}">
          {{$lp->name}}
        </a>
			</li>
			@endforeach
		   <div class="clear"></div>
	    </ul>
	    <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!-- ./RoomTypeHeader -->