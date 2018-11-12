@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Bài đăng
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
                                <th>Thời gian tạo</th>
                                <th>Thời gian sửa</th>
                                <th>Delete</th>
                                <th>Edit</th>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaibai/xoa/{{$lb->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaibai/sua/{{$lb->id}}">Edit</a></td>
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