@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Loại bài
        <small>Danh sách bài đăng</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Loại bài viết</li>
        <li class="active"><a href="admin/loaibai/danhsach">Danh sách loại bài viết</a></li>
        <li class="active">Danh sách bài viết</li>
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
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                     </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Loại bài</th>
                                <th>Loại phòng</th>
                                <th>User đăng</th>
                                <th>Tiêu đề</th>
                                <th>Xem</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($baidang as $bd)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bd->id}}</td>
                                <td>{{$bd->loaibai->name}}</td>
                                <td>{{$bd->loaiphong->name}}</td>
                                <td>{{$bd->user->username}}</td>
                                <td>{{$bd->title}}</td>
                                <td class="center">
                                    <a href="admin/baidang/xem/{{$bd->id}}" class="btn btn-success"><i class="fa fa-newspaper-o"></i> Xem</a>
                                </td>
                                 <td>
                                  <a href="admin/baidang/xoa/{{$bd->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Xóa</a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>



                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection