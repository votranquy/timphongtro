@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Sửa bình luận</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <form method="POST" action="user/binhluan/sua/{{$binhluan->id}}" class="user_form "  enctype="multipart/form-data">
	            	@csrf
	               <div class="item">
	                  <label>Sửa bình luận bài viết {{$binhluan->baidang->title}}</label>
	                  <div class="item_input">
                            <textarea class="pro_title" value="" type="text" name="description" placeholder="" style="margin-bottom:5px;border: 1px solid #dfdfdf;padding: 5px; width: 100%;">{{$binhluan->description}}</textarea>
	                  </div>
	              </div>
	             <div class="header_btn_post" style="text-align:center;margin:0;">
	             		<button type="submit" class="btn_post1" >Chỉnh sửa</button>
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
                    description:{
                        required:true,
						minlength: 1,
						maxlength: 500,
                    },
                },
                messages:{
                    description:{
                        required: "Vui lòng nhập bình luận",
						minlength: "Bình luận phải ít nhất 1 ký tự",
						maxlength: "Bình luận không được quá 500 ký tự",
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