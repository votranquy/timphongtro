@extends('admin.layout.index')
@section('content')    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Loại bài
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Loại bài</a></li>
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
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Thời gian tạo</th>
                                <th>Thời gian sửa</th>
                                <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==10)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==11)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==12)
                                    <th>{{$quyen->hanhdong->name}}</th>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaibai as $lb)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lb->id}}</td>
                                <td>{{$lb->name}}</td>
                                <td>{{$lb->description}}</td>
                                <td>{{$lb->created_at}}</td>
                                <td>{{$lb->updated_at}}</td>
                                <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==10)
                                    <td class="center">
                                        <a href="admin/loaibai/xem/{{$lb->id}}" class="btn btn-success"><i class="fa fa-newspaper-o"></i> View</a>
                                    </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==11)
                                     <td class="center"><a href="admin/loaibai/sua/{{$lb->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==12)
                                     <th>Delete</th>
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