@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Loại phòng
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Loại phòng</li>
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
                                 <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==7)
                                         <th>View</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==8)
                                        <th>Edit</th>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==9)
                                        <th>Delete</th>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaiphong as $lp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lp->id}}</td>
                                <td>{{$lp->name}}</td>
                                <td>{{$lp->description}}</td>
                                 <?php $i=1; ?>
                                @foreach(Auth::user()->nhomtaikhoan->nhom->quyen as $quyen)
                                    @if($quyen->isAction == 1 && $i==7)
                                    <td class="center">
                                        <a href="admin/loaiphong/xem/{{$lp->id}}" class="btn btn-success"><i class="fa fa-newspaper-o"></i> View</a>
                                    </td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==8)
                                       <td class="center"><a href="admin/loaiphong/sua/{{$lp->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>
                                    @endif
                                    @if($quyen->isAction == 1 && $i==9)
                                         <td class="center"><a href="admin/loaiphong/danhsach" onclick="return confirm('Chức năng tạm thời disable');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Delete</a>
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