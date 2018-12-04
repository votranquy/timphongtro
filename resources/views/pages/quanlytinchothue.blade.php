@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Quản lý tin cho thuê</span>
				</div>
				<div class="clear"></div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <!-- <th>ID</th> -->
                                <th>Loại bài</th>
                                <th>Loại phòng</th>
                                <th>User đăng</th>
                                <th>Tiêu đề</th>
                                <th>Xem</th>
                                <th>Sửa</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baidang as $bd)
                            <tr class="odd gradeX" align="center">
                                <!-- <td>{{$bd->id}}</td> -->
                                <td>{{$bd->loaibai->name}}</td>
                                <td>{{$bd->loaiphong->name}}</td>
                                <td>{{$bd->user->username}}</td>
                                <td>{{$bd->title}}</td>
                                <td class="center">
                                    <a href="baidang/{{$bd->id}}" class="btn btn-success">Xem</a>
                                </td>
                                <td class="center">
                                    <a href="user/baidang/baichothue/sua/{{$bd->id}}" class="btn btn-success">Sửa</a>
                                </td>
                                 <td>
                                    <a href="user/baidang/baichothue/xoa/{{$bd->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger">
                                    <i onclick="return confirm('Bạn có muốn xóa không?')">
                                    </i> Xóa
                                    </a>
                                </td>

                            </tr>
                           @endforeach
                        </tbody>
                    </table>
			</div>
		</div>
	</div>
</div>
@endsection