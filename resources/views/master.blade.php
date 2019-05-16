<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>POS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    <script src="{{ asset('lib/js/jquery/jquery-1.12.3.min.js')}}" type="text/javascript" ></script>

    <script src="{{ asset('lib/js/myjs.js')}}"></script>

    <script src="{{ asset('bootstrapnew/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('bootstrapnew/css/bootstrap.min.css')}}"></script>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <link href="{{ asset('lib/css/customize-template.css')}}" type="text/css" media="screen, projection" rel="stylesheet" />

    <link rel="stylesheet" href="plugins/font-awesome.min.css" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
    <body>
        <!-- <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{!! URL('home') !!}" class="brand">
                        <img src="{{ url('public/lib/images/logoevn.png')}}" width="30px" height="50px" style="margin-top:-4px">POS 
                    </a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        @if(Auth::user()->nguoidung_id == 1) 
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="{!! URL::route('hethong.hethong') !!}">HỆ THỐNG</a>
                            </li>
							<li class="dropdown">
                                <a href="{!! URL::route('danhmuc.danhmuc') !!}">DANH MỤC</a>
                            </li>
							<li class="dropdown">
                                <a href="{!! URL::route('chucnang.chucnang') !!}">CHỨC NĂNG</a>
                            </li>
							<li class="dropdown">
                                <a href="{!! URL::route('trogiup.trogiup') !!}">TRỢ GIÚP</a>
                            </li>
                        </ul>
                        @elseif (Auth::user()->nguoidung_id == 2)
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="{!! URL::route('hethong.hethong') !!}">HỆ THỐNG</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('chucnang.chucnang') !!}">CHỨC NĂNG</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('trogiup.trogiup') !!}">TRỢ GIÚP</a>
                            </li>
                        </ul>
                        @elseif (Auth::user()->nguoidung_id == 3)
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="{!! URL::route('hethong.hethong') !!}">HỆ THỐNG</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('danhmuc.danhmuc') !!}">DANH MỤC</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('trogiup.trogiup') !!}">TRỢ GIÚP</a>
                            </li>
                        </ul>
                        @else
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="{!! URL::route('hethong.hethong') !!}">HỆ THỐNG</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('chucnang.chucnang') !!}">CHỨC NĂNG</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! URL::route('trogiup.trogiup') !!}">TRỢ GIÚP</a>
                            </li>
                        </ul>
                        @endif
                        <ul class="nav pull-right">
                            <li>
                                <a href="{!! url('logout') !!}">{{ Auth::user()->name }}</a>
                                <input type="hidden" name="idNV" value="{{ Auth::user()->id }}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{!! URL('home') !!}" class="brand">
        <img src="{{ url('public/lib/images/logoevn.png')}}" width="30px" height="50px" style="margin-top:-4px">POS 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Hệ thống
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Đăng xuất</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{!! URL::route('hethong.thongtincongty.getList') !!}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Thông tin Cửa Hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{!! URL::route('hethong.doimatkhau.getEdit') !!}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Đổi mật khẩu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Danh mục
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Chức năng
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Trợ giúp
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
        <div id="body-container">
            <div id="body-content">
                @yield('danhmuc')
                @yield('hethong')
                @yield('chucnang')
                @yield('trogiup')
                @yield('header')

            <section class="page container" >
                    <div class="row">
                        <div class="span16">
                        @if (Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                        @yield('content')
                        </div>
                    </div>
            </section>
        </div>
        </div>


        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>


        <script src="{{ asset('lib/js/jquery/jquery-tablesorter.js')}}" type="text/javascript" ></script>

        <script src="{{ asset('lib/js/bootstrap/bootstrap-collapse.js')}}" type="text/javascript" ></script>

        <script src="{{ asset('lib/js/bootstrap/bootstrap-modal.js')}}" type="text/javascript" ></script>

        <script src="{{ asset('lib/js/bootstrap/bootstrap-transition.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-alert.js')}}" type="text/javascript" ></script>
        
        <script src="{{ asset('lib/js/bootstrap/bootstrap-dropdown.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-scrollspy.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-tab.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-tooltip.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-popover.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-button.js')}}" type="text/javascript" ></script>
        
        <script src="{{ asset('lib/js/bootstrap/bootstrap-carousel.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-typeahead.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-affix.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/bootstrap/bootstrap-datepicker.js')}}" type="text/javascript" ></script>

        <script src="{{ asset('lib/js/jquery/jquery-chosen.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('lib/js/jquery/virtual-tour.js')}}" type="text/javascript" ></script>

        <script src="lib/js/adminlte.js"></script>

        <script type="text/javascript">
            $(function() {
                $('#sample-table').tablesorter();
                //$('#datepicker').datepicker();
                //$(".chosen").chosen();
            });
        </script>

        <footer class="application-footer">
            <div class="container">
                        <b> <p>Cửa hàng POS</p></b>
                        <div class="disclaimer">
                            <p>Địa chỉ: </p>
                            <p>Điện thoại - Fax:   Email: </p>
                        </div>
            </div>
        </footer>
	</body>
</html>