@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bài đăng
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Bài đăng.</li>
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Loại bài</th>
                                <th>Loại phòng</th>
                                <th>User đăng</th>
                                <th>Tiêu đề</th>
                                <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==1)
                                    <th>Xem</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==2)
                                    <th>Sửa</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==3)
                                    <th>Xóa</th>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
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
                                 <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==1)
                                    <td class="center">
                                        <a href="admin/baidang/xem/{{$bd->id}}" class="btn btn-success"><i class="fa fa-newspaper-o"></i> Xem</a>
                                    </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==2)
                                    <th>Sửa</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==3)
                                     <td>
                                        <a href="admin/baidang/xoa/{{$bd->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger">
                                        <i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil">
                                        </i> Xóa
                                        </a>
                                    </td>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach

                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    <div style="text-align:center;">
                    {{ $baidang->links() }}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection