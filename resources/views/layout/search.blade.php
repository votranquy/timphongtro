<div class="content itop">
	<div class="container">
		<div class="itop_search">
			<div class="search_form">
				<div class="search_form_title">
					<h2>Tìm nhà cho thuê</h2>
				</div>
				<div class="search_form_wrap">
					<div class="search_form_key">
						<div class="itop_search_txt">
							<div class="itop_search_content">
								<form method="get" action="timkiem">
									<div class="itop_search_key">
										<input class="its_type_val" name="type" type="hidden"
											value="1"> <input class="its_key" id="textSearch"
											name="q"
											placeholder="Nhập khu vực, địa điểm, dụ án bạn muốn thuê"
											type="text" autocomplete="off">
									</div>
									<button type="submit" class="its_submit">
										<i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm
									</button>
								</form>
							</div>
							<div class="search_auto_ct content_hide_out"></div>
						</div>
					</div>
					<div class="search_form_filter search_form_content">
						<h5 class="search_title_sub">Hoặc lọc nhanh theo nhu cầu
							của bạn</h5>
						<form name="" action="timkiem">
							@csrf
							<div class="search_form_item search_form_item_1"
								style="display: none;">
								<input class="item_text" type="text" name="q" value=""
									placeholder="Nhập từ khóa địa chỉ bạn muốn tìm">
							</div>

								<select class="pro_title" name="roomtype" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 30%; height: 50px;">
									@foreach($loaiphong as $lp)
										<option value="{{$lp->id}}">{{$lp->name}}</option>
									@endforeach
								</select>

								<select class="pro_title" name="address" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 30%; height: 50px;">
										<option value="Hà
												Nội">Hà
												Nội</option>
										<option value="TP
												Hồ Chí Minh">TP
												Hồ Chí Minh</option>
										<option value="An Giang">An Giang</option>
										<option value="Bắc Cạn">Bắc Cạn</option>
										<option value="Bắc Giang">Bắc Giang</option>
										<option value="Bắc Kạn">Bắc Kạn</option>
										<option value="Bạc Liêu">Bạc Liêu</option>
										<option value="Bắc Ninh">Bắc Ninh</option>
										<option value="Bến Tre">Bến Tre</option>
										<option value="Bình Dương">Bình Dương</option>
										<option value="Bình Phước">Bình Phước</option>
										<option value="Bình Thuận">Bình Thuận</option>
										<option value="Bình Định">Bình Định</option>
										<option value="Cà Mau">Cà Mau</option>
										<option value="Cần Thơ">Cần Thơ</option>
										<option value="Cao Bằng">Cao Bằng</option>
										<option value="Đắc Lắc">Đắc Lắc</option>
										<option value="Đắc Lắc">Đắk Lắc</option>
										<option value="Điện Biên">Điện Biên</option>
										<option value="Đắc Lắc">Đồng Nai</option>
										<option value="Đắc Lắc">Đồng Tháp</option>
										<option value="Gia Lai">Gia Lai</option>
										<option value="Hà Giang">Hà Giang</option>
										<option value="Hà Nam">Hà Nam</option>
										<option value="Hà Nội">Hà Nội</option>
										<option value="Hà Tĩnh">Hà Tĩnh</option>
										<option value="Hải Dương">Hải Dương</option>
										<option value="Hải Phòng">Hải Phòng</option>
										<option value="Hậu Giang">Hậu Giang</option>
										<option value="Hòa Bình">Hòa Bình</option>
										<option value="Huế">Huế</option>
										<option value="Hưng Yên">Hưng Yên</option>
										<option value="Khánh Hòa">Khánh Hòa</option>
										<option value="Kiên Giang">Kiên Giang</option>
										<option value="Kon Tum">Kon Tum</option>
										<option value="Lai Châu">Lai Châu</option>
										<option value="Lâm Đồng">Lâm Đồng</option>
										<option value="Lạng Sơn">Lạng Sơn</option>
										<option value="Lào Cai">Lào Cai</option>
										<option value="Long An">Long An</option>
										<option value="Nam Định">Nam Định</option>
										<option value="Nghệ An">Nghệ An</option>
										<option value="Ninh Bình">Ninh Bình</option>
										<option value="Ninh Thuận">Ninh Thuận</option>
										<option value="Phú Thọ">Phú Thọ</option>
										<option value="Phú Yên">Phú Yên</option>
										<option value="Quảng Bình">Quảng Bình</option>
										<option value="Quảng Nam">Quảng Nam</option>
										<option value="Quảng Ngãi">Quảng Ngãi</option>
										<option value="Quảng Ninh">Quảng Ninh</option>
										<option value="Quảng Trị">Quảng Trị</option>
										<option value="Sóc Trăng">Sóc Trăng</option>
										<option value="Sơn La">Sơn La</option>
										<option value="Tây Ninh">Tây Ninh</option>
										<option value="Thái Bình">Thái Bình</option>
										<option value="Thái Nguyên">Thái Nguyên</option>
										<option value="Thanh Hoá">Thanh Hoá</option>
										<option value="Tiền Giang">Tiền Giang</option>
										<option value="Thái Bình">Thái Bình</option>
										<option value="Trà Vinh">Trà Vinh</option>
										<option value="Tuyên Quang">Tuyên Quang</option>
										<option value="Vĩnh Long">Vĩnh Long</option>
										<option value="Vĩnh Phúc">Vĩnh Phúc</option>
										<option value="Vũng Tàu">Vũng Tàu</option>
										<option value="Yên Bái">Yên Bái</option>
								</select>




								<select class="pro_title" name="price" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 30%; height: 50px;">
										<option value="1">1 triệu</option>
										<option value="2">1 - 3 triệu</option>
										<option value="3">3 - 5 triệu</option>
										<option value="4">5 - 10 triệu</option>
										<option value="5">10 - 40 triệu</option>
										<option value="6">40 - 70 triệu</option>
										<option value="7">70 - 100 triệu</option>
										<option value="8">100 triệu</option>
								</select>


								<select class="pro_title" name="aceage" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 30%; height: 50px;">
										<option value="1">10 m2</option>
										<option value="2">10 - 15 m2</option>
										<option value="3">15 - 25 m2</option>
										<option value="4">25 - 35 m2</option>
										<option value="5">35 - 50 m2</option>
										<option value="6">50 - 75 m2</option>
										<option value="7">75 - 100 m2</option>
										<option value="8">Trên 100 m2</option>
								</select>
							<br>
							<div class="  search_form_item_submit">
								<button type="submit" class="search_form_submit">
									<i class="fa fa-search" aria-hidden="true"></i> Tìm
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
