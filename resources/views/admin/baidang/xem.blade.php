@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài đăng
                            <small><h1>{{$baidang->title}}</h1></small>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tbody>
                            <td style="width: 15%;">
                                <b style="color: blue;">Tiêu đề </b>
                              </td>
                              <td>
                                {{$baidang->title}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Người đăng</b>
                              </td>
                              <td>
                                {{$baidang->user->username}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Loại bài </b>
                              </td>
                              <td>
                                {{$baidang->loaibai->name}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Loại phòng </b>
                              </td>
                              <td>
                                {{$baidang->loaiphong->name}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá </b>
                              </td>
                              <td>
                                {{$baidang->price}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá min </b>
                              </td>
                              <td>
                                {{$baidang->minPrice}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Giá max </b>
                              </td>
                              <td>
                                {{$baidang->maxPrice}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Địa chỉ </b>
                              </td>
                              <td>
                                {{$baidang->address}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">SĐT </b>
                              </td>
                              <td>
                                {{$baidang->phone}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Thời gian </b>
                              </td>
                              <td>
                                {{$baidang->created_at}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Diện tích min </b>
                              </td>
                              <td>
                                {{$baidang->chitietphong->minAceage}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Diện tích max</b>
                              </td>
                              <td>  
                                {{$baidang->chitietphong->maxAceage}}
                              </td>
                            </tr>                           
                            <td style="width: 15%;">
                                <b style="color: blue;">Mô tả </b>
                              </td>
                              <td>
                                {{$baidang->chitietphong->description}}
                              </td>
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