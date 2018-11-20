@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bài đăng
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Bài đăng</li>
        <li class="active">Danh sách</li>
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
<!--                     <div class="col-lg-12">
                        <h1 class="page-header">Bài đăng
                            <small></small>
                        </h1>
                    </div> -->

                    <!-- /.col-lg-12 -->
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
<!--                                 <th>Edit</th> -->
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
<!--                                 <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/baidang/xoa/{{$bd->id}}"> Delete</a></td> -->
<!--                                 <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/baidang/sua/{{$bd->id}}">Edit</a></td> -->
<!--                                 <td class="center">
                                  <a href="admin/baidang/sua/{{$bd->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                 </td> -->
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