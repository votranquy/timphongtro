@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Đăng bài cần thuê</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="dangbaicanthue/1" class="user_form "  enctype="multipart/form-data">
	            	@csrf
	               <div class="item">
	                  <label>Tiêu đề tin <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="title" class="pro_title" type="text" id="" value="" placeholder="Cần thuê nhà trọ, phòng trọ ở đâu..." style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
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
	                     <input  name="phone" class="pro_title" type="text" id="" value="" placeholder="Nhập số điện thoại của bạn" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập nội dung (điều kiện, diện tích, an ninh, ...)<span class="red">(*)</span></label>
	                  <div class="item_input">
                            <textarea class="pro_title" value="" type="text" name="description" placeholder="Nhập các yêu cầu mong muốn về phòng cần thuê" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%;"></textarea>
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mức giá min(tháng) <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="minprice" class="pro_title" type="text" id="" value="" placeholder="Nhập mức giá" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Mức giá max(tháng) <span class="red">(*)</span></label>
	                  <div class="item_input">
	                     <input  name="maxprice" class="pro_title" type="text" id="" value="" placeholder="Nhập mức giá" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập diện tích min</label>
	                  <div class="item_input">
	                     <input  name="minaceage" class="pro_title" type="text" id="" value="" placeholder="Nhập diện tích" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	               <div class="item">
	                  <label>Nhập diện tích max</label>
	                  <div class="item_input">
	                     <input  name="maxaceage" class="pro_title" type="text" id="" value="" placeholder="Nhập diện tích" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%; height: 33px;">
	                  </div>
	              </div>
	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Đăng bài cần thuê</button>
	              </div>
	          </form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.user_form').validate({
                rules:{
                    title:{
                        required:true,
                        minlength: 30,
                    },
					phone:{
                        required:true,
                        number: true,
                        minlength:10,
                        maxlength:10,
                    },
                    description:{
                        required:true,
						minlength: 100,
						maxlength: 500,
                    },
					minprice:{
                        required:true,
                        number: true,
                    },
                    maxprice:{
                        required:true,
                        number: true,
                    },
					minaceage:{
                        required:true,
                        number: true,
                    },
                    maxaceage:{
                        required:true,
                        number: true,
                    },
                },
                messages:{
                    title:{
                        required:"Vui lòng nhập tiêu đề",
                        minlength: "Tiêu đề phải có ít nhất 30 ký tự",
                    },
					phone:{
                        required:"Vui lòng nhập số điện thoại",
                        number: "Số điện thoại chỉ gồm số",
                        minlength: "Số điện thoại không hợp lệ",
                        maxlength: "Số điện thoại không hợp lệ",
                    },
                    description:{
                        required: "Vui lòng nhập mô tả tin",
						minlength: "Mô tả phải ít nhất 100 ký tự",
						maxlength: "Mô tả không được quá 500 ký tự",
                    },
					minprice:{
                        required:"Vui lòng nhập giá tiền",
                        number: "Giá tiền không đúng định dạng",
                    },
                    maxprice:{
                        required:"Vui lòng nhập giá tiền",
                        number: "Giá tiền không đúng định dạng",
                    },
					minaceage:{
                        required:"Vui lòng nhập diện tích",
                        number: "Diện tích phải là một số",
                    },
                    maxaceage:{
                        required:"Vui lòng nhập diện tích",
                        number: "Diện tích phải là một số",
                    },
                },
            });
        });
</script>
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
</script>
@endsection
@section('script')

@endsection