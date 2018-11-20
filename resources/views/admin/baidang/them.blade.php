@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Bài đăng
        <small>Thêm</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Bài đăng</li>
        <li class="active">Thêm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="connectedSortable">
          <div class="box box-success">

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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

                        <form action="admin/baidang/them" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Loại bài đăng</label>
                                <select class="form-control" name="posttype" id="LoaiBai">
                                    @foreach($loaibai as $lb)
                                    <option value="{{$lb->id}}">{{$lb->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="title" placeholder="Nhập tiêu đề" />
                            </div>

                            <div class="form-group">
                                <label>Loại phòng</label>
                                <select class="form-control" name="roomtype">
                                    @foreach($loaiphong as $lp)
                                    <option value="{{$lp->id}}">{{$lp->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại" />
                            </div>

                              <div class="form-group">
                                <label>Nội dung</label>

                                <div class="col-sm-10">
                                  <textarea class="form-control" name="description" placeholder="Nhập nội dung"></textarea>
                                </div>
                              </div>



                            <p >
                            <div class="form-group" id="giamin" style="display:;">
                                <label>Giá min</label>
                                <input class="form-control" name="minprice" placeholder="Nhập giá min" />
                            </div>
                            <div class="form-group" id="giamax" style="display:;">
                                <label>Giá max</label>
                                <input class="form-control" name="maxprice" placeholder="Nhập giá max" />

                            </div>
                            <div class="form-group" id="dientichmin" style="display:;">
                                <label>Diện tích min</label>
                                <input class="form-control" name="minaceage" placeholder="Nhập diện tích min" />
                            </div>
                            <div class="form-group" id="dientichmax" style="display:;">
                                <label>Diện tích max</label>
                                <input class="form-control" name="maxaceage" placeholder="Nhập diện tích max" />
                            </div>
                          </p>


                          <p>
                            <div class="form-group" id="gia" style="display:none;">
                                <label>Giá</label>
                                <input class="form-control" name="price" placeholder="Nhập giá" />
                            </div>
                            <div class="form-group" id="dientich" style="display:none;">
                                <label>Diện tích</label>
                                <input class="form-control" name="aceage" placeholder="Nhập diện tích" />
                             </div>
                            <div class="form-group" id="diachi" style="display:none;">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group" id="kinhdo" style="display:none;">
                                <label>Kinh độ</label>
                                <input class="form-control" name="longitute" placeholder="Nhập kinh độ" />
                            </div>
                            <div class="form-group" id="vido" style="display:none;">
                                <label>Vĩ độ</label>
                                <input class="form-control" name="latitude" placeholder="Nhập vĩ độ" />
                            </div>
                            <div class="form-group" id="anh" style="display:none;">
                                <label>Hình ảnh</label>
                                <input type="file"  name="Hinh" class="form-control" />
                            </div>
                          </p>




                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection

@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
          $(document).ready(function (){
            // var idLoaiBai=$("#LoaiBai").val();
            // if (idLoaiBai != "2") {
            //         $("#chothue").hide();
            //         $("#timtro").show();
            //     }else{
            //         $("#chothue").show();
            //         $("#timtro").hide();
            //     }
            $("#LoaiBai").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() != "2") {
                    $("#giamin").show();
                    $("#giamax").show();
                    $("#dientichmin").show();
                    $("#dientichmax").show();
                    $("#gia").hide();
                    $("#dientich").hide();
                    $("#diachi").hide();
                    $("#kinhdo").hide();
                    $("#vido").hide();
                    $("#anh").hide();
                }else{
                    $("#giamin").hide();
                    $("#giamax").hide();
                    $("#dientichmin").hide();
                    $("#dientichmax").hide();
                    $("#gia").show();
                    $("#dientich").show();
                    $("#diachi").show();
                    $("#kinhdo").show();
                    $("#vido").show();
                    $("#anh").show();
                }
            });
        });
    </script>
@endsection
