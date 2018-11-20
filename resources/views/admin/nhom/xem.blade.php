@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nhom
        <small>Danh sách user</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Nhóm</li>
        <li class="active"><a href="admin/nhom/danhsach">Danh sách nhóm</li>
        <li class="active">Danh sách user</li>

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
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                     </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center" style="text-align: center; background-color: green; color: white;">
                                <th>ID</th>
                                <th>UserName</th>
                                <th>Name</th>
                                <th>Quyền</th>
                                <th>Phone</th>
<!--                                 <th>Image</th> -->
                                <th>Email</th>
                                <th>View</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhomtaikhoan->user as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td width="10px">{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->nhomtaikhoan->nhom->name}}</td>
                                <td>{{$user->phone}}</td>
<!--                                 <td><img width="100px" src="upload/tintuc/{{$us->image}}"/></td> -->
                                <td>{{$user->email}}</td>
                                <td class="center">
                                    <a href="admin/user/xem/{{$user->id}}" class="btn btn-block btn-success"><i class="fa fa-newspaper-o"></i> View</a>
                                </td>
                                <td class="center"><a href="admin/user/xoa/{{$user->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Delete</a></td>
                                <td class="center"><a href="admin/user/sua/{{$user->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>
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