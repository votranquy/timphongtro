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
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Thêm loại bài</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <form action="admin/loaibai/them" method="POST">
                    <input type="hidden" name="_token" value={{csrf_token()}} />
                      <div class="box-body">
                        <div class="form-group">
                          <label>Tên loại bài đăng</label>
                          <input class="form-control" id="name" name="name" placeholder="Nhập tên loại bài">
                        </div>
                        <div class="form-group">
                          <label>Mô tả</label>
                          <input class="form-control" id="description" name="description"placeholder="Nhập mô tả loại bài">
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>



@endsection