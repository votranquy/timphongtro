<div class="header">
			<div class="container">
				<div class="box_logo">
					<a title=""
						href="" class="logo"> <img
						alt=""
						src="index_files/pqd1541408742.png">
					</a>
				</div>
				<ul class="header_user">
          @if(Auth::check())
					<li class="header_btn_post">
						<a class="btn_post1"
						href="javascript: void(0)">
						<i class="fa fa-plus-circle">
						</i> Đăng tin
						</a>
						<div class="header_post_sub">
							<ul>
								<li>
									<a href="">Đăng tin cho thuê</a>
								</li>
								<li>
									<a rel="nofollow" target="_blank"
									href="">Đăng tin mua bán</a>
								</li>
								<li>
									<a href="">Đăng tin cần thuê</a>
								</li>
							</ul>
						</div>
					</li>









	         <ul class="nav navbar-nav pull-right">

          <!-- Comment -->
          <li class="dropdown notifications-menu">
            <a href="thongbao" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">
              	<?php $dem=0;?>
              	@foreach($demthongbao as $tb)
              		@if($tb->user_id == Auth::user()->id)
              		<?php $dem++; ?>
              		@endif
              	@endforeach

              	<?php echo($dem);?>
              	</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- ./Comment -->

	                    <li>
	                        <a href="nguoidung">
	                            <span class ="glyphicon glyphicon-user"></span>
	                            {{Auth::user()->name}}
	                        </a>
	                    </li>

	                    <li>
	                        <a href="dangxuat">Đăng xuất</a>
	                    </li>
	         </ul>
          @else
					<li class="header_user_nologin"><a rel="nofollow"
						href="dangnhap"
						class="login"> Đăng nhập</a> <span>/</span> <a rel="nofollow"
						href="dangky"> Đăng ký</a>
					</li>
          @endif
				</ul>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
</div>

    <div class="content header_menu">
      <div class="container header_content">
        <ul class="header_menu_ul">
    			<li class="header_menu_li active">
            <a class="header_menu_a"
    				href="trangchu">Trang chủ
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


