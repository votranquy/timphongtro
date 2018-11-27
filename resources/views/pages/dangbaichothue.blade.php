@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			 <div class="user_form_pro_content">
				<div class="module_title">
					<span>Đăng bài cho thuê</span>
				</div>
	            <form method="POST" action="" class="user_form "  enctype="multipart/form-data">
	               <div class="item">
	                  <label>Tiêu đề tin <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="title" class="pro_title" type="text" id="pro_title" value="" placeholder="Cho thuê nhà trọ, phòng trọ ở đâu..." style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	              <div class="item">
	                  <label>Loại phòng <span class="red">(*)</span></label>
	                  <div class="item_input">
	                        <select class="pro_title" name="roomtype" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
                                @foreach($loaiphong as $lp)
                                    <option value="{{$lp->id}}">{{$lp->name}}</option>
                                 @endforeach
                            </select>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Số điện thoại để liên hệ</label>
	                  <div class="item_input">
	                     <input  name="phone" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập số điện thoại của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập mô tả (điều kiện, diện tích, an ninh, ...)<span class="red">(*)</span></label>
	                  <div class="item_input">
                            <textarea class="pro_title" value="" type="text" name="description" placeholder="Nhập nội dung " style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%;">
                            </textarea>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mức giá (tháng) <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="price" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập mức giá" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập diện tích</label>
	                  <div class="item_input">
	                     <input  name="aceage" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập diện tích" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập địa chỉ</label>
	                  <div class="item_input">
	                     <input  name="address" class="pro_title" type="text" id="pro_title" value="" placeholder="Nhập địa chỉ" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	          </form>



		</div>
	</div>
</div>
</div>
@endsection
@section('script')

@endsection