@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Phòng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
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
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaiphong as $lp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lp->id}}</td>
                                <td>{{$lp->name}}</td>
                                <td>{{$lp->description}}</td>

                                <td class="center">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-newspaper-o"></i> View</a>
                                </td>

                                 <td class="center"><a href="admin/loaiphong/sua/{{$lp->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>

                                <td class="center"><a href="admin/loaiphong/danhsach" onclick="return confirm('Chức năng tạm thời disable');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Delete</a></td>













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