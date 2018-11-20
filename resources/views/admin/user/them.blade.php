@extends('admin.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Thêm</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> User</li>
        <li class="active">Thêm</li>
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
                    <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="_token" value={{csrf_token()}} /> -->
                    @csrf
                      <div class="box-body">
                        <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" id="username" name="username" placeholder="Nhập username">
                        </div>
                        <div class="form-group">
                          <label>PassWord</label>
                          <input class="form-control" id="password" name="password" placeholder="Nhập password">
                        </div>
                        <div class="form-group">
                          <label>Tên</label>
                          <input class="form-control" id="name" name="name"placeholder="Nhập Tên bạn">
                        </div>
                        <div class="form-group">
                          <label>Địa chỉ</label>
                          <input class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                          <label>SDT</label>
                          <input class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                          <label>Ảnh</label>
                          <input class="form-control" type="file" name="Hinh" placeholder="Chọn ảnh">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" id="email" name="email" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                                <label>Quyền </label>
                                <label class="radio-inline">
                                    <input name="group" value="3" checked="" type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="group" value="2" type="radio">Mod
                                </label>
                                <label class="radio-inline">
                                    <input name="group" value="1" type="radio">Admin
                                </label>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
@endsection