@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> User</li>
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
                                <th>Email</th>

                                 <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==4)
                                        <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==5)
                                        <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==6)
                                        <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td width="10px">{{$us->username}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->nhomtaikhoan->nhom->name}}</td>
                                <td>{{$us->phone}}</td>
                                <td>{{$us->email}}</td>
                                 <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==4)
                                        <td class="center">
                                    <a href="admin/user/xem/{{$us->id}}" class="btn btn-block btn-success"><i class="fa fa-newspaper-o"></i> View
                                    </a>
                                </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==5)
                                        <td class="center">
                                    <a href="admin/user/sua/{{$us->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit
                                    </a>
                                </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==6)
                                        <td class="center">
                                    <a href="admin/user/xoa/{{$us->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Delete
                                    </a>
                                </td>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach

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