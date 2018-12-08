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
    <section class="content">
      <div class="user-profile row">
        <div class="col-md-3 col-sm-5 crop-avatar">
            <!-- Profile links -->
            <div class="block">
                <div class="block mt-element-card mt-card-round mt-element-overlay">
                    <div class="thumbnail">
                        <div class="thumb">
                            <div class="profile-userpic mt-card-item">
                                <div class="avatar-view mt-card-avatar mt-overlay-1">
                                    <img src="storage/tintuc/{{$user->name}}" >
                                </div>
                                <div class="mt-card-content">
                                    <h3 class="mt-card-name">Name</h3>
                                    <p class="mt-card-desc font-grey-mint"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /profile links -->

                  <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="avatar-modal-label"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form class="avatar-form" method="post" action="" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="avatar-modal-label"><i class="til_img"></i><strong>Change Profile Image</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="avatar-body">
                                        <!-- Upload image and data -->
                                        <div class="avatar-upload">
                                            <input class="avatar-src" name="avatar_src" type="hidden">
                                            <input class="avatar-data" name="avatar_data" type="hidden">
                                            <input type="hidden" name="user_id" value="1"/>
                                            <input name="_token" type="hidden" value="qTLZEC0xBjlA8dRtDqaX7UAR4fyVRBor29e7g8CS">
                                            <label for="avatarInput">New Image</label>
                                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                        </div>

                                        <div class="loading" tabindex="-1" role="img" aria-label="Loading"></div>
                                        <!-- Crop and preview -->
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="avatar-wrapper"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="avatar-preview preview-lg"></div>
                                                <div class="avatar-preview preview-md"></div>
                                                <div class="avatar-preview preview-sm"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary avatar-save" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.modal -->
        </div>

        <div class="col-md-9 col-sm-7">
            <div class="profile-content">
                <div class="tabbable-custom">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#tab_1_1" class="nav-link active" data-toggle="tab" aria-expanded="true">User profile</a>
                        </li>
                        <li class="nav-item">
                                <a href="#tab_1_3" class="nav-link" data-toggle="tab" aria-expanded="false">Change password</a>
                        </li>
                    </ul>

                  <div class="tab-content">
                    <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active" id="tab_1_1">
                      <form method="POST" action="https://cms.botble.com/admin/system/users/update-profile/1" accept-charset="UTF-8" id="profile-form" class="row">
                        <input name="_token" type="hidden" value="qTLZEC0xBjlA8dRtDqaX7UAR4fyVRBor29e7g8CS">
                        <div class="form-group col-md-6"  >
                          <label for="first_name" class="control-label required">Full Name</label>
                          <input class="form-control" data-counter="30" name="first_name" type="text" value="{{$user->name}}" id="first_name">
                        </div>
                        <div class="form-group col-md-6"  >
                            <label for="last_name" class="control-label required">Account Name</label>
                            <input class="form-control" data-counter="30" name="last_name" type="text" value="{{$user->username}}" id="last_name">
                        </div>
                        <div class="form-group col-md-6"  >
                          <label for="username" class="control-label required">Address</label>
                          <input class="form-control" data-counter="30" name="username" type="text" value="{{$user->address}}" id="username">
                        </div>
                        <div class="form-group col-md-6"  >
                          <label for="email" class="control-label required">Email</label>
                          <input class="form-control" placeholder="Ex: example@gmail.com" data-counter="60" name="email" type="text" value="{{$user->email}}" id="email">
                        </div>
                        <div class="form-group col-md-6"  >
                          <label for="phone" class="control-label">Mobile Number</label>
                          <input class="form-control" data-counter="15" name="phone" type="text" id="phone" value="{{$user->phone}}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-12">
                          <div class="form-actions">
                              <div class="btn-set text-center">
                                  <button type="submit" name="submit" value="submit" class="btn btn-success">
                                      <i class="fa fa-check-circle"></i> Update
                                  </button>
                              </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- END PERSONAL INFO TAB -->
                    <!-- CHANGE PASSWORD TAB -->
                    <div class="tab-pane" id="tab_1_3">
                      <form method="POST" action="https://cms.botble.com/admin/system/users/change-password/1" accept-charset="UTF-8" id="password-form">
                        <input name="_token" type="hidden" value="qTLZEC0xBjlA8dRtDqaX7UAR4fyVRBor29e7g8CS">
                        <div class="form-group col-md-6"  >
                          <label for="password" class="control-label required">New Password</label>
                          <input class="form-control" data-counter="60" name="password" type="password" id="password">
                          <div class="pwstrength_viewport_progress" >
                          <span class="hidden">Password Strength</span>    </div>
                        </div>
                        <div class="form-group col-md-6"  >
                          <label for="password_confirmation" class="control-label required">Confirm New Password</label>
                          <input class="form-control" data-counter="60" name="password_confirmation" type="password" id="password_confirmation">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-12">
                            <div class="form-actions">
                                <div class="btn-set text-center">
                                    <button type="submit" name="submit" value="submit" class="btn btn-success">
                                        <i class="fa fa-check-circle"></i> Update
                                    </button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                <!-- END CHANGE PASSWORD TAB -->
                  </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </section>
@endsection