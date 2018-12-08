@extends('layout.index')
@section('content')
	<div class="module1">
		<div class="module1_content">
				<div class="detail">
					<div class="detail_content content pro_detail">
						<h2>{{$baidang->title}}</h2>
						<!-- Bai cho thue -->
						@if($baidang->post_type_id == 2)
							<div class="detail_info1">
								<div class="item_detail1">
									<p class="pro_price">
										<span class="pro_lable">Giá: </span> {{$baidang->price}} đ
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích: </span> {{$baidang->chitietphong->aceage}} m2
									</p>
									<p class="item_detail">
										<span class="pro_lable">Đăng vào: </span> <?php $time=$baidang->created_at; echo time_ago_in_php($time);?> ({{ $baidang->created_at }})
									</p>
								</div>
								<div class="contact">
									<div class="title">Thông tin liên hệ</div>
									<p class="item_detail">
										<span class="pro_lable">Họ tên </span> {{$baidang->user->username}}
									</p>
									<p class="item_detail">
										<span class="pro_lable">SĐT </span> <a class="phone"
											href="tel:0909417386">{{$baidang->phone}}</a>
									</p>
									<p class="item_detail">
										<span class="pro_lable">Địa chỉ </span> {{$baidang->address}}
									</p>
								</div>
							</div>
					    	<div class="row carousel-holder">
					            <div class="col-md-12">
					                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					                    <ol class="carousel-indicators">
					                        <?php $i=0; ?>
					                        @foreach($anh as $ah)
					                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"
					                        @if($i == 0)
					                        class="active"
					                        @endif
					                        ></li>
					                        <?php $i++; ?>
					                        @endforeach
					                    </ol>
					                    <div class="carousel-inner">
					                        <?php $i=0; ?>
					                        @foreach($anh as $ah)
					                        <div 
					                        @if($i ==0)
					                        class="item active"
					                        @else  
					                        class="item" 
					                        @endif
					                        >
					                        <?php $i++; ?>
					                            <img class="slide-image" width="200px" height="150px" src="storage/tintuc/{{$ah->path}}" alt="{{$ah->path}}">
					                        </div>
					                        @endforeach
					                    </div>
					                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					                        <span class="glyphicon glyphicon-chevron-left"></span>
					                    </a>
					                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					                        <span class="glyphicon glyphicon-chevron-right"></span>
					                    </a>
					                </div>
					            </div>
					        </div>
							<h2>Chi tiết </h2>
							<div class="des">{{$baidang->chitietphong->description}}
							</div>
							<div class="detail_info1">
								<div class="item_detail1">
									<p class="pro_price">
										<span class="pro_lable">Giá: </span> {{$baidang->price}} đ
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích: </span> {{$baidang->chitietphong->aceage}} m2
									</p>
									<p class="item_detail">
										<span class="pro_lable">Đăng vào: </span> <?php $time=$baidang->created_at; echo time_ago_in_php($time);?> ({{ $baidang->created_at }})
									</p>
								</div>
								<div class="contact">
									<div class="title">Thông tin liên hệ</div>
									<p class="item_detail">
										<span class="pro_lable">Họ tên </span> {{$baidang->user->username}}
									</p>
									<p class="item_detail">
										<span class="pro_lable">SĐT </span> <a class="phone"
											href="tel:0909417386">{{$baidang->phone}}</a>
									</p>
									<p class="item_detail">
										<span class="pro_lable">Địa chỉ </span> {{$baidang->address}}
									</p>
								</div>
							</div>
							<div class="clear"></div>
						@endif
						<!-- Bai can thue -->
						@if($baidang->post_type_id == 1)
							<div class="detail_info1">
								<div class="item_detail1">
									<p class="pro_price">
										<span class="pro_lable">Giá min: </span> {{$baidang->minPrice}} đ
									</p>
									<p class="pro_price">
										<span class="pro_lable">Giá max: </span> {{$baidang->maxPrice}} đ
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích min: </span> {{$baidang->chitietphong->minAceage}} m2
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích max: </span> {{$baidang->chitietphong->maxAceage}} m2
									</p>
									<p class="item_detail">
										<span class="pro_lable">Đăng vào: </span> <?php $time=$baidang->created_at; echo time_ago_in_php($time);?> ({{ $baidang->created_at }})
									</p>
								</div>
								<div class="contact">
									<div class="title">Thông tin liên hệ</div>
									<p class="item_detail">
										<span class="pro_lable">Họ tên </span> {{$baidang->user->username}}
									</p>
									<p class="item_detail">
										<span class="pro_lable">SĐT </span> <a class="phone"
											href="tel:0909417386">{{$baidang->phone}}</a>
									</p>
								</div>
							</div>

							<h2>Chi tiết </h2>
							<div class="des">{{$baidang->chitietphong->description}}
							</div>
							<div class="detail_info1">
								<div class="item_detail1">
									<p class="pro_price">
										<span class="pro_lable">Giá min: </span> {{$baidang->minPrice}} đ
									</p>
									<p class="pro_price">
										<span class="pro_lable">Giá max: </span> {{$baidang->maxPrice}} đ
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích min: </span> {{$baidang->chitietphong->minAceage}} m2
									</p>
									<p class="pro_acreage">
										<span class="pro_lable">Diện tích max: </span> {{$baidang->chitietphong->maxAceage}} m2
									</p>
									<p class="item_detail">
										<span class="pro_lable">Đăng vào: </span> <?php $time=$baidang->created_at; echo time_ago_in_php($time);?> ({{ $baidang->created_at }})
									</p>
								</div>
								<div class="contact">
									<div class="title">Thông tin liên hệ</div>
									<p class="item_detail">
										<span class="pro_lable">Họ tên </span> {{$baidang->user->username}}
									</p>
									<p class="item_detail">
										<span class="pro_lable">SĐT </span> <a class="phone"
											href="tel:0909417386">{{$baidang->phone}}</a>
									</p>
								</div>
							</div>
							<div class="clear"></div>
						@endif









		                <!-- Comments Form -->
		                @if(Auth::check())
		                <div class="well">
	                        @if(count($errors)>0)
	                            <div class="alert alert-danger">
	                                @foreach($errors->all() as $err)
	                                    {{$err}}<br>
	                                @endforeach
	                            </div>
	                        @endif
	                        @if(session('thongbao'))
	                            <div class="alert alert-success">
	                                {{session('thongbao')}}
	                            </div>
	                        @endif
		                    <h4>Viết bình luận ...
		                    	<span class="glyphicon glyphicon-pencil"></span>
		                    </h4>
		                    <form action="user/binhluan/them/{{$baidang->id}}" method="post" role="form">
		                        @csrf
		                        <div class="form-group">
		                            <textarea class="form-control" rows="3" name="description"></textarea>
		                        </div>
		                        <button type="submit" class="btn btn-primary">Gửi</button>
		                    </form>
		                </div>
		                @endif
		                <!-- ./Posted Comments -->
		                <!-- Comment -->
		                @foreach($baidang->binhluan as $bl)
		                <div class="media">
		                    <div class="media-body">
		                        <h4 class="media-heading">{{$bl->user->username}}
		                            <small><?php $time=$bl->created_at; echo time_ago_in_php($time);?></small>
		                        </h4>
		                        {{ $bl->description }}
		                    </div>
		                </div>
		                @endforeach
		                <!-- ./Comment -->
					</div>
				</div>
		</div>
	</div>

@endsection
@section('script')
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
@endsection

