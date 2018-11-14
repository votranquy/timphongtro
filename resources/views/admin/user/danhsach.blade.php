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
                            <tr align="center">
                                <th>ID</th>
                                <th>UserName</th>
                                <th>PassWord</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Tạo</th>
                                <th>Sửa lần cuối</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td>{{$us->username}}</td>
                                <td>*************</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->address}}</td>
                                <td>{{$us->phone}}</td>
                                <td><img width="100px" src="upload/tintuc/{{$us->image}}"/></td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->created_at}}</td>
                                <td>{{$us->updated_at}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$us->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$us->id}}">Edit</a></td>
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