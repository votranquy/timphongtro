@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Bài đăng
        <small>Chi tiết</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Bài đăng</li>
        <li class="active"><a href="admin/baidang/danhsach">Danh sách</a></li>
        <li class="active">Xem chi tiết</li>
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tbody>
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Tiêu đề </b>
                            </td>
                            <td>
                                {{$baidang->title}}
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Người đăng</b>
                            </td>
                            <td>
                                {{$baidang->user->username}}
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Loại bài </b>
                            </td>
                            <td>
                                {{$baidang->loaibai->name}}
                              </td>
                          </tr>
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Loại phòng </b>
                              </td>
                              <td>
                                {{$baidang->loaiphong->name}}
                              </td>
                          </tr>
                            @if($baidang->loaibai->id == "2")
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá </b>
                              </td>
                              <td>
                                {{$baidang->price}}
                              </td>
                            </tr>
                            @endif
                            @if($baidang->loaibai->id == "1")
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá min </b>
                              </td>
                              <td>
                                {{$baidang->minPrice}}
                              </td>
                          </tr>
                          @endif
                          @if($baidang->loaibai->id == "1")
                          <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá max </b>
                              </td>
                              <td>
                                {{$baidang->maxPrice}}
                              </td>
                            </tr>
                           @endif
                          @if($baidang->loaibai->id == "2")
                           <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Địa chỉ </b>
                              </td>
                              <td>
                                {{$baidang->address}}
                              </td>
                            </tr>
                           @endif
                           <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">SĐT </b>
                              </td>
                              <td>
                                {{$baidang->phone}}
                              </td>
                            </tr>
                            <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Thời gian </b>
                              </td>
                              <td>
                                {{$baidang->created_at}}
                              </td>
                            </tr>
                            @if($baidang->loaibai->id == "1")
                            <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Diện tích min </b>
                              </td>
                              <td>
                                {{$baidang->chitietphong->minAceage}}
                              </td>
                            </tr>
                            @endif
                            @if($baidang->loaibai->id == "1")
                            <tr>
                            <td style="width: 15%;">
                                <b style="color: blue;">Diện tích max</b>
                              </td>
                              <td>
                                {{$baidang->chitietphong->maxAceage}}
                              </td>
                            </tr>
                            @endif
                            <td style="width: 15%;">
                                <b style="color: blue;">Mô tả </b>
                              </td>
                              <td>
                                {{$baidang->chitietphong->description}}
                              </td>
                            </tr>
                            @if($baidang->loaibai->id == "2")
                              <td style="width: 15%;">
                                <b style="color: blue;">Ảnh </b>
                              </td>
                            @foreach($anh as $ah)
                              <td>
                                <img width="150px" src="storage/tintuc/{{$ah->path}}"/>
                              </td>
                            @endforeach
                            @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->


                <!-- Bình luận -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bình luận
                        </h1>
                    </div>

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
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baidang->binhluan as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bl->id}}</td>
                                <td>{{$bl->user->username}}
                                </td>
                                <td>{{$bl->description}}</td>
                                <td>{{$bl->created_at}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/binhluan/xoa/{{$bl->id}}/{{ $baidang->id }}"> Delete</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- .Bình luận -->




            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection