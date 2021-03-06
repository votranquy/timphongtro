@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Chỉnh sửa</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> User</li>
        <li class="active"><a href="admin/user/danhsach">Danh sách</a></li>
        <li class="active">Chỉnh sửa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="connectedSortable">
          <div class="box box-success">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start -->
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('loi'))
                            <div class="alert alert-danger">
                                {{session('loi')}}
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="_token" value={{csrf_token()}} /> -->
                    @csrf
                      <div class="box-body">
                        <div class="form-group">
                                <label>{{$user->email}}</label>
                        </div>
                        <div class="form-group">
                                <label>Quyền: </label>
                                @foreach($nhom as $nhom)
                                @if($nhom->id > Auth::user()->nhomtaikhoan->group_id)
                                  <label class="radio-inline">
                                      <input name="usergroup" value="{{$nhom->id}}" type="radio"
                                      @if($user->nhomtaikhoan->group_id == $nhom->id)       checked=""
                                      @endif>{{ $nhom->name }}
                                  </label>
                                  @endif
                                @endforeach
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
@endsection