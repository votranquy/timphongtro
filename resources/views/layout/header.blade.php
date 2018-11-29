<div class="header">
	<div class="container">
		<!-- Logo -->
		<div class="box_logo">
			<a title="" href="" class="logo"> 
				<img alt="" src="index_files/pqd1541408742.png">
			</a>
		</div>
		<!-- ./Logo -->
		<!-- User Header -->
		<ul class="header_user">
			 @if(Auth::check()) 

			 <!-- Post -->
			<li class="header_btn_post"> 
				<a class="btn_post1" href="javascript: void(0)"> 
					<i class="fa fa-plus-circle"></i> Đăng tin 
				</a>
				<div class="header_post_sub"> 
					<ul> 
						<li> 
							<a href="">Đăng tin cho thuê</a> 
						</li> 
						<li> 
							<a rel="nofollow" target="_blank" href="">Đăng tin tìm thuê</a> 
						</li> 
					</ul> 
				</div> 
			</li> 
			<!-- ./Post -->
			<!-- User header Menu -->
			<li class="header_user_loged"> 
				<a href="/user/vo-tran-quy-4684.htm" class="name"> 
					@if(Auth::user()->name != NULL)
					<span class="image">
						<img src="upload/tintuc/{{Auth::user()->image}}" />
					</span>
					@endif
					<b>{{Auth::user()->username}}</b> 
				</a>
				<div class="header_user_menu"> 
					<ul>
						<li class="use">
							<a href="" class="name2">
								@if(Auth::user()->name != NULL)
								<span class="image">
									<img src="upload/tintuc/{{Auth::user()->image}}" />
								</span>
								@endif
								<b>{{Auth::user()->username}}</b>
							</a>
						</li>
						<li class="li_break"></li>
						<li>
							<a href="dangbaichothue"> Đăng tin cho thuê
							</a>
						</li>
						<li>
							<a href="/dang-tin-can-thue.htm">
								 Đăng tin cần thuê
							</a>
						</li>
						<li>
							<a href="/quan-ly-tin-dang-ban.htm">
								 Quản lý tin cho thuê
							</a>
						</li>
						<li class="li_break"></li>
						<li>
							<a href="/doi-anh-dai-dien.htm">
								 Thay ảnh đại diện
							</a> 
						</li> 
						<li> 
							<a href="/cap-nhat-thong-tin.htm"> 
								 Cập nhật thông tin 
							</a> 
						</li> 
						<li> 
							<a href="/doi-mat-khau.htm"> 
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
			    <a href="thongbao/" class="name">
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
				href="trangchu">TRANG CHỦ
        </a>
      </li>
			@foreach($loaiphong as $lp)
			<li class="header_menu_li header_menu_li_3 ">
        <a class="header_menu_a header_menu_a_cat"
				href="loaiphong/{{$lp->id}}">
          <b>{{$lp->name}}</b>
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