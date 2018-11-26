@extends('layout.index')
@section('content')
	<div class="module1">
		<div class="module1_content">
				<div class="detail">
					<div class="detail_content content pro_detail">
						<h2>{{$baidang->title}}</h2>
						<div class="detail_info1">
							<div class="item_detail1">
								<p class="pro_price">
									<span class="pro_lable">Giá: </span> {{$baidang->price}} đ
								</p>
								<p class="pro_acreage">
									<span class="pro_lable">Diện tích: </span> {{$baidang->chitietphong->aceage}} m2
								</p>
								<p class="item_detail">
									<span class="pro_lable">Địa chỉ nhà: </span> {{$baidang->address}}
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
						<div class="content content_qcauto1 margin_10_0"
							style="transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; margin: 0px; padding: 0px; border-width: 0px; width: 0px; height: 0px;">
							<!-- Auto1 -->
							<ins class="adsbygoogle"
								style="display: block; height: 0px; width: 0px;"
								data-ad-client="ca-pub-6623210302800586"
								data-ad-slot="9900179595" data-ad-format="auto"
								data-adsbygoogle-status="done">
								<ins id="aswift_1_expand"
									style="display: inline-table; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent;">
									<ins id="aswift_1_anchor"
										style="display: block; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent; overflow: hidden; transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; opacity: 0;">
										<iframe width="850" height="90" frameborder="0"
											marginwidth="0" marginheight="0" vspace="0" hspace="0"
											allowtransparency="true" scrolling="no"
											allowfullscreen="true"
											onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}"
											id="aswift_1" name="aswift_1"
											style="left:0;position:absolute;top:0;width:850px;height:90px;"
											src="./indexNews_files/saved_resource(4).html"></iframe>
									</ins>
								</ins>
							</ins>
							<script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
						</div>
						<div class="dtop_left product_user product_list_images">
							<div id="slider1_container"
								style="position: relative; top: 0px; left: 0px; width: 800px; height: 533.333px; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(25, 25, 25); overflow: hidden;"
								jssor-slider="true">
								<div
									style="position: absolute; top: 0px; left: 0px; width: 900px; height: 600px; transform-origin: 0px 0px 0px; transform: scale(0.888889);">
									<div class=""
										style="position: relative; top: 0px; left: 0px; width: 900px; height: 600px; background: rgb(25, 25, 25); overflow: visible; display: block;">
										<div u="loading"
											style="position: absolute; top: 0px; left: 0px; width: 900px; height: 500px; display: none;"
											debug-id="loading-container">
											<div
												style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
											</div>
											<div
												style="position: absolute; display: block; background: url(/themes/jssor_slider/img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
											</div>
										</div>
										<div u="slides" class="slide_sub"
											style="cursor: move; position: absolute; left: 0px; top: 0px; width: 900px; height: 500px; z-index: 0; overflow: hidden;">
											<div debug-id="slide_container"
												style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px; display: none;"></div>
										</div>
										<div u="slides" class="slide_sub"
											style="cursor: move; position: absolute; left: 0px; top: 0px; width: 900px; height: 500px; overflow: hidden; z-index: 0;"
											debug-id="slide-board">
											<div
												style="width: 900px; height: 500px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; display: none;"></div>
											<div debug-id="slide-0"
												style="width: 900px; height: 500px; top: 0px; left: 900px; position: absolute; overflow: hidden;">
												<img class="img_full" u="image"
													src="./indexNews_files/qhu1541577977.jpg" border="0"
													style="width: 900px; height: 500px; top: 0px; left: 0px; position: absolute;">
												<img u="thumb" src="./indexNews_files/qhu1541577977.jpg"
													style="display: none;">
												<div u="loading"
													style="position: absolute; top: 0px; left: 0px; width: 900px; height: 500px; z-index: 1000; display: none;">
													<div
														style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
													<div
														style="position: absolute; display: block; background: url(/themes/jssor_slider/img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
												</div>
											</div>
											<div debug-id="slide-1"
												style="width: 900px; height: 500px; top: 0px; left: -900px; position: absolute; overflow: hidden;">
												<img class="img_full" u="image"
													src="./indexNews_files/eqr1541577977.jpg" border="0"
													style="width: 900px; height: 500px; top: 0px; left: 0px; position: absolute;">
												<img u="thumb" src="./indexNews_files/eqr1541577977.jpg"
												style="display: none;">
												<div u="loading"
													style="position: absolute; top: 0px; left: 0px; width: 900px; height: 500px; z-index: 1000; display: none;">
													<div
														style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
													<div
														style="position: absolute; display: block; background: url(/themes/jssor_slider/img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
												</div>
											</div>
											<div debug-id="slide-2"
												style="width: 900px; height: 500px; top: 0px; left: 0px; position: absolute; overflow: hidden;">
												<img class="img_full" u="image"
													src="./indexNews_files/usu1541577978.jpg" border="0"
													style="width: 900px; height: 500px; top: 0px; left: 0px; position: absolute;">
												<img u="thumb" src="./indexNews_files/usu1541577978.jpg"
												style="display: none;">
												<div u="loading"
													style="position: absolute; top: 0px; left: 0px; width: 900px; height: 500px; z-index: 1000; display: none;">
													<div
														style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
													<div
														style="position: absolute; display: block; background: url(/themes/jssor_slider/img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
													</div>
												</div>
											</div>
										</div>
										<span u="arrowleft" class="jssora05l"
											style="top: 215px; left: 8px; display: none;"><i
											class="fa fa-chevron-left"></i> </span><span u="arrowright"
											class="jssora05r"
											style="top: 215px; right: 8px; display: none;"><i
											class="fa fa-chevron-right"></i> </span>
										<div u="thumbnavigator" class="jssort01"
											style="left: 0px; bottom: 0px; width: 900px; height: 100px;"
											jssor-slider="true">
											<div
												style="position: absolute; top: 0px; left: 0px; width: 900px; height: 100px; transform-origin: 0px 0px 0px; transform: scale(1);">
												<div class="jssort01"
													style="left: 0px; bottom: 0px; display: block; position: relative; top: 0px; overflow: visible;">
													<div u="slides"
														style="cursor: default; position: absolute; overflow: hidden; left: 292px; top: 14px; width: 316px; height: 72px; z-index: 0;">
														<div debug-id="slide_container"
															style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px;"></div>
													</div>
													<div u="slides"
														style="cursor: default; position: absolute; overflow: hidden; left: 292px; top: 14px; width: 316px; height: 72px; z-index: 0;"
														debug-id="slide-board">
														<div
															style="width: 100px; height: 72px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
														<div debug-id="slide-0"
															style="width: 100px; height: 72px; top: 0px; left: 0px; position: absolute; overflow: hidden;">
															<div u="prototype" class="p"
																style="left: 0px; top: 0px;">
																<div class="w">
																	<img u="thumb"
																		src="./indexNews_files/qhu1541577977.jpg" class="t"
																		style="">
																</div>
																<div class="c"></div>
															</div>
															<div
																style="width: 100px; height: 72px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
														</div>
														<div debug-id="slide-1"
															style="width: 100px; height: 72px; top: 0px; left: 108px; position: absolute; overflow: hidden;">
															<div u="prototype" class="p"
																style="left: 0px; top: 0px;">
																<div class="w">
																	<img u="thumb"
																		src="./indexNews_files/eqr1541577977.jpg" class="t"
																		style="">
																</div>
																<div class="c"></div>
															</div>
															<div
																style="width: 100px; height: 72px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
														</div>
														<div debug-id="slide-2"
															style="width: 100px; height: 72px; top: 0px; left: 216px; position: absolute; overflow: hidden;">
															<div u="prototype" class="p pav"
																style="left: 0px; top: 0px;">
																<div class="w">
																	<img u="thumb"
																		src="./indexNews_files/usu1541577978.jpg" class="t"
																		style="">
																</div>
																<div class="c"></div>
															</div>
															<div
																style="width: 100px; height: 72px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
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
									<span class="pro_lable">Địa chỉ nhà: </span> {{$baidang->address}}
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
		                <!-- Comments Form -->
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
		                    <form action="binhluan/{{$baidang->id}}" method="post" role="form">
		                        @csrf
		                        <div class="form-group">
		                            <textarea class="form-control" rows="3" name="description"></textarea>
		                        </div>
		                        <button type="submit" class="btn btn-primary">Gửi</button>
		                    </form>
		                </div>
		                <!-- ./Posted Comments -->
		                <!-- Comment -->
		                @foreach($baidang->binhluan as $bl)
		                <div class="media">
		                    <div class="media-body">
		                        <h4 class="media-heading">{{$bl->user->username}}
		                            <small>{{ $bl->created_at}}</small>
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


