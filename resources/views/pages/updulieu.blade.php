@extends('layout.index')
@section('content')
<div class="module1">
    <div class="module1_content">
        <div class="">
            <div class="user_form_pro_content">
                <div class="module_title">
                    <span>Đăng</span>
                </div>
                <div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form method="POST" action="updulieu" class="user_form "  enctype="multipart/form-data">
                    @csrf

                    <div class="item">
                        <label>Nhập liệu</label><br>
                        <br>
                        <div class="input-group control-group increment" >
                          <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm ô nhập</button>
                          </div>
                        </div>
                        <div class="clone hide">
                          <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="name[]" class="form-control" multiple />
                            <div class="input-group-btn">
                              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                          </div>
                        </div>
                    </div>

                 <div class="header_btn_post" style="text-align:center;margin:0;">
                        <button type="submit" class="btn_post1" >ĐĂNG</button>
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
    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>




@endsection
@section('script')

@endsection