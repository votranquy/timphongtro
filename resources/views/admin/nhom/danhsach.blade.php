@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nhóm
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Nhóm</li>
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
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên nhóm</th>
                                <th>Mô tả</th>

                                <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==13)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==14)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==15)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhom as $nh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$nh->id}}</td>
                                <td>{{$nh->name}}</td>
                                <td>{{$nh->description}}</td>


                                <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==13)
                                    <td class="center">
                                        <a href="admin/nhom/xem/{{$nh->id}}" class="btn btn-success"><i class="fa fa-newspaper-o"></i> View</a>
                                    </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==14)
                                        <td class="center"><a href="admin/nhom/sua/{{$nh->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==15)
                                        <th>{{$quyen->hanhdong->name}}</th>
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