<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    @if(Auth::check())
    <div class="user-panel">
      <div class="pull-left image">
        <img src="upload/tintuc/{{Auth::user()->image}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    @endif
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <!-- Profile -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="admin/profile/view/{{Auth::user()->id}}">
          <i class="fa fa-pie-chart"></i>
          <span>Profile</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin/profile/view/{{Auth::user()->id}}"><i class="fa fa-circle-o"></i> Xem</a></li>
          <li><a href="admin/loaiphong/them"><i class="fa fa-circle-o"></i> Sửa </a></li>
        </ul>
      </li>      


      <!-- Bài đăng -->
      <li class="">
        <a href="admin/baidang/danhsach">
          <i class="fa fa-pie-chart"></i>
          Bài đăng

        </a>
      </li>


        <!-- User -->
        <li class="treeview">
        <a href="admin/user/danhsach">
          <i class="fa fa-pie-chart"></i>
          <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin/user/danhsach"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="admin/user/them"><i class="fa fa-circle-o"></i> Thêm</a></li>
        </ul>
      </li>

      <!-- Loại phòng -->
      <li class="treeview">
        <a href="admin/loaiphong/danhsach">
          <i class="fa fa-pie-chart"></i>
          <span>Loại Phòng</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin/loaiphong/danhsach"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="admin/loaiphong/them"><i class="fa fa-circle-o"></i> Thêm</a></li>
        </ul>
      </li>

      <!-- Loại bài -->
      <li class="treeview">
        <a href="admin/loaibai/danhsach">
          <i class="fa fa-pie-chart"></i>
          <span>Loại Bài</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin/loaibai/danhsach"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="admin/loaibai/them"><i class="fa fa-circle-o"></i> Thêm</a></li>
        </ul>
      </li>

      <!-- Nhóm -->
      <li class="treeview">
        <a href="admin/nhom/danhsach">
          <i class="fa fa-pie-chart"></i>
          <span>Nhóm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin/nhom/danhsach"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="admin/nhom/them"><i class="fa fa-circle-o"></i> Thêm</a></li>
        </ul>
      </li>





    </ul>
  </section>
  <!-- /.sidebar -->
</aside>