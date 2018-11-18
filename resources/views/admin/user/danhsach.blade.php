@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Danh Sách</small>
                        </h1>
                    </div>
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
                                <th>Address</th>
                                <th>Phone</th>
<!--                                 <th>Image</th> -->
                                <th>Email</th>
                                <th>View</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td width="10px">{{$us->username}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->address}}</td>
                                <td>{{$us->phone}}</td>
<!--                                 <td><img width="100px" src="upload/tintuc/{{$us->image}}"/></td> -->
                                <td>{{$us->email}}</td>
                                <td class="center">
                                    <a href="admin/user/xem/{{$us->id}}" class="btn btn-block btn-success"><i class="fa fa-newspaper-o"></i> View</a>
                                </td>
                                <td class="center"><a href="admin/user/xoa/{{$us->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger"><i onclick="return confirm('Bạn có muốn xóa không?')" class="fa fa-pencil"></i> Delete</a></td>
                                <td class="center"><a href="admin/user/sua/{{$us->id}}" title="Sửa" class="btn btn-primary"><i class="fa fa-edit "></i>Edit</a></td>
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