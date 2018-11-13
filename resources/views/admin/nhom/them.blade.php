@extends('admin.layout.index')
@section('content')
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Thêm nhóm</h3>
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
                    <form action="admin/nhom/them" method="POST">
                    <input type="hidden" name="_token" value={{csrf_token()}} />
                      <div class="box-body">
                        <div class="form-group">
                          <label>Tên nhóm</label>
                          <input class="form-control" id="name" name="name" placeholder="Nhập tên nhóm">
                        </div>
                        <div class="form-group">
                          <label>Mô tả</label>
                          <input class="form-control" id="description" name="description"placeholder="Nhập mô tả nhóm">
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>



@endsection