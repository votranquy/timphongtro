@extends('layout.index')
@section('content')
<div class="module1">
	<div class="module1_content">
		<div class="">
			<div class="user_form_pro_content">
				<div class="module_title">
					<span>Quản lý bình luận</span>
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
                                <th>Bình luận</th>
                                <th>Bài đăng</th>
                                <th>Thời gian</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($binhluan as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bl->description}}</td>
                                <td><a href="baidang/{{$bl->baidang->id}}">{{$bl->baidang->title}}</a></td>
                                <td>{{$bl->created_at}}</td>
                                <td class="center">
                                    <a href="user/binhluan/sua/{{$bl->id}}" class="btn btn-success">Sửa</a>
                                </td>
                                 <td>
                                    <a href="user/binhluan/xoa/{{$bl->id}}" onclick="return confirm('Bạn đã chắc xóa ?');" title="Xóa" class="btn btn-danger">
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