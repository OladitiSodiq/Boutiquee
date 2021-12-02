<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | phoonePOS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- SWEET ALERT CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  <!-- Font Awesome-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/lga.min.js') }}"></script>
  <!-- SWEET ALERT JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <!-- Scripts -->
    <script>
        window.CashUrban = {
            'csrfToken' : "{{csrf_token()}}",
            'APP_URL' : "{{ route('admin.index') }}",
        };
    </script>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea#post' });</script>

    <script>
        var baseUrl = "{{ config('app.url') }}";
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1046996485780979');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1046996485780979&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
   <?php
$route = explode("/", Request::path());
?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#!" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>p</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>phoone</b>POS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="">
            <a href="#" class="">
              <span class="hidden-xs">Lock</span>
            </a>
            </li>


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::guard("admin")->user()->firstname }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::guard("admin")->user()->firstname.' '.Auth::guard("admin")->user()->lastname}}
                  <br>
                  @if(Auth::guard("admin")->user()->role_id == 1)
                    Super Admin
                    @elseif(Auth::guard("admin")->user()->role_id == 2)
                    Admin
                    @elseif(Auth::guard("admin")->user()->role_id == 3)
                    Moderator
                    @else
                    Staff
                    @endif
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            &nbsp;
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard("admin")->user()->firstname  . ' ' . Auth::guard("admin")->user()->lastname}}</p>
          <a href="#"><i aria-hidden="true" class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i aria-hidden="true" class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        {{-- <li><a href="{{  route('index')}}"><i aria-hidden="true" class="fa fa-globe"></i> <span>Visit Website</span> </a></li> --}}


        <li class="{{ Route::is('admin.dashboard') ? 'active' : ''  }}"><a href="{{  route('admin.dashboard')}}"><i aria-hidden="true" class="fa fa-dashboard" ></i> <span>Dashboard</span> </a></li>

        @if(Auth::guard("admin")->user()->role_id == 1)
        <li class="{{ Route::is('staff') || Route::is('admin.edit_faq') ? 'active' : ''  }}"><a href="{{  route('staff') }}"><i aria-hidden="true" class="fa fa-users"></i> <span>Staff</span> </a></li>

        <li class="{{ Route::is('partner.admin') || Route::is('admin.edit_faq') ? 'active' : ''  }}"><a href="{{  route('partner.admin') }}"><i aria-hidden="true" class="fa fa-users"></i> <span> Business Partners</span> </a></li>
          
        <li class="{{ Route::is('superLocation.admin') || Route::is('admin.edit_faq') ? 'active' : ''  }}"><a href="{{  route('superLocation.admin') }}"><i aria-hidden="true" class="fa fa-users"></i> <span> Super Admin Location </span> </a></li>
        


        <li class="treeview {{ (Route::is('aBusinessPartnerCommision_create') || Route::is('BusinessPartnerCommision_create')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Vas Billing Comm</span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('BusinessPartnerCommision_create') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision_create') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> New Vas Billing Comm</a></li>
              <li class="{{ Route::is('BusinessPartnerCommision.admin') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision.admin') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Vas Billing Comm</a></li>
            </ul>
        </li>



        {{-- <li class="treeview {{ (Route::is('aBusinessPartnerCommision_create') || Route::is('BusinessPartnerCommision_create')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Sector </span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('BusinessPartnerCommision_create') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision_create') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> New Sector</a></li>
              <li class="{{ Route::is('BusinessPartnerCommision.admin') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision.admin') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Sector</a></li>
              <li class="{{ Route::is('BusinessPartnerCommision_create') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision_create') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> New Sub Sector</a></li>
              <li class="{{ Route::is('BusinessPartnerCommision.admin') ? 'active' : ''  }}"><a href="{{ route('BusinessPartnerCommision.admin') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Ssub Sector</a></li>
            </ul>
        </li> --}}



        <li class="{{ Route::is('admin.faqs') || Route::is('admin.edit_faq') ? 'active' : ''  }}"><a href="{{  route('admin.faqs') }}"><i aria-hidden="true" class="fa fa-question-circle"></i> <span>FAQ</span> </a></li>

        <li class="{{ Route::is('admin.city') || Route::is('admin.edit_city') ? 'active' : ''  }}"><a href="{{  route('admin.city') }}"><i aria-hidden="true" class="fa fa-question-circle"></i> <span>City</span> </a></li>

         <li class="{{ Route::is('admin.sector') || Route::is('admin.edit_Sector') ? 'active' : ''  }}"><a href="{{  route('admin.sector') }}"><i aria-hidden="true" class="fa fa-question-circle"></i> <span>Sector</span> </a></li>

        <li class="{{ Route::is('admin.subSector') || Route::is('admin.edit_subSector') ? 'active' : ''  }}"><a href="{{  route('admin.subSector') }}"><i aria-hidden="true" class="fa fa-question-circle"></i> <span>Sub Sector</span> </a></li>

        @endif

        {{-- <li class="treeview {{ (Route::is('admin.testimonials') || Route::is('admin.create_testimonial')) ? 'active' : ''  }}">
          <a href="#">
            <i aria-hidden="true" class="fa fa-comment"></i>
            <span>Testimonials</span>
            <span class="pull-right-container">
              <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.testimonials') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Testimonials</a></li>
          </ul>
        </li> --}}
        @if(Auth::guard("admin")->user()->role_id == 1)
        <li class="treeview {{ (Route::is('admin.edit_identification') || Route::is('admin.identifications')) ? 'active' : ''  }}">
          <a href="#">
            <i aria-hidden="true" class="fa fa-id-card"></i> <span>Identification Means</span>
            <span class="pull-right-container">
              <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{ route('admin.create_identification') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Identification Means</a></li> --}}
            <li><a href="{{ route('admin.identifications') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Identification Means</a></li>
          </ul>
        </li>



        </li>
        <li class="treeview {{ (Route::is('admin.create_bank') || Route::is('admin.banks')) ? 'active' : ''  }}">
          <a href="#">
            <i aria-hidden="true" class="fa fa-bank"></i> <span>Bank</span>
            <span class="pull-right-container">
              <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            @if(Auth::guard('admin')->user()->role_id == 1 || Auth::guard('admin')->user()->role_id == 2)
            <li class="{{ Route::is('admin.create_bank') ? 'active' : ''  }}"><a href="{{ route('admin.create_bank') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Bank</a></li>
            @endif
            <li class="{{ Route::is('admin.banks') ? 'active' : ''  }}"><a href="{{ route('admin.banks') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Banks</a></li>
          </ul>
        </li>



        <li class="treeview {{ (Route::is('admin.create_Commission') || Route::is('admin.Commission')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Commission</span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('admin.create_Commission') ? 'active' : ''  }}"><a href="{{ route('admin.create_Commission') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Commission</a></li>
              <li class="{{ Route::is('admin.Commission') ? 'active' : ''  }}"><a href="{{ route('admin.Commission') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Commission</a></li>
            </ul>
        </li>

        <li class="treeview {{ (Route::is('admin.create_dataBundle') || Route::is('admin.dataBundles')) ? 'active' : ''  }}">
          <a href="#">
            <i aria-hidden="true" class="fa fa-tag"></i> <span>Data Bundles</span>
            <span class="pull-right-container">
              <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="{{ Route::is('admin.create_dataBundle') ? 'active' : ''  }}"><a href="{{ route('admin.create_dataBundle') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Data Bundles</a></li>
            <li class="{{ Route::is('admin.dataBundles') ? 'active' : ''  }}"><a href="{{ route('admin.dataBundles') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Data Bundle</a></li>
          </ul>
      </li>




        <li class="treeview {{ (Route::is('admin.create_Commission_split') || Route::is('admin.Commission_split')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Commission Split</span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('admin.create_Commission_split') ? 'active' : ''  }}"><a href="{{ route('admin.create_Commission_split') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Commission Split</a></li>
              <li class="{{ Route::is('admin.Commission_split') ? 'active' : ''  }}"><a href="{{ route('admin.Commission_split') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Commission Split</a></li>
            </ul>
        </li>

        <li class="treeview {{ (Route::is('admin.create_third_party') || Route::is('admin.third_party')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Third Party Services </span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('admin.create_third_party') ? 'active' : ''  }}"><a href="{{ route('admin.create_third_party') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New 3rd party Services</a></li>
              <li class="{{ Route::is('admin.third_party') ? 'active' : ''  }}"><a href="{{ route('admin.third_party') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All 3rd party Services</a></li>
            </ul>
        </li>

        <li class="treeview {{ (Route::is('admin.create_sublocation_discount') || Route::is('admin.sublocation_discount')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>Sub Location Discount </span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('admin.create_sublocation_discount') ? 'active' : ''  }}"><a href="{{ route('admin.create_sublocation_discount') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Sub Location Discount</a></li>
              <li class="{{ Route::is('admin.sublocation_discount') ? 'active' : ''  }}"><a href="{{ route('admin.sublocation_discount') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All Sub Location Discount</a></li>
            </ul>
        </li>

        <li class="treeview {{ (Route::is('admin.create_biller') || Route::is('admin.biller')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-tag"></i> <span>All Services </span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ Route::is('admin.create_biller') ? 'active' : ''  }}"><a href="{{ route('admin.create_biller') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Services</a></li>

              <li class="{{ Route::is('admin.biller') ? 'active' : ''  }}"><a href="{{ route('admin.biller') }}"><i aria-hidden="true" class="fa fa-circle-o"></i>View All Service</a></li>

              {{-- <li class="{{ Route::is('admin.create_biller') ? 'active' : ''  }}"><a href="{{ route('admin.create_biller') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Add New Biller Service</a></li> --}}
            </ul>
        </li>
    @endif

        <li class="treeview {{ (Route::is('admin.posmerchants') || Route::is('admin.show_posmerchant')) ? 'active' : ''  }}">
            <a href="#">
              <i aria-hidden="true" class="fa fa-bank"></i> <span>POS Merchants</span>
              <span class="pull-right-container">
                <i aria-hidden="true" class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              <li class="{{ (Route::is('admin.posmerchants') || Route::is('admin.show_posmerchant')) ? 'active' : ''  }}"><a href="{{ route('admin.posmerchants') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> All POS agents</a></li>
              <li class="{{ Route::is('admin.reports') ? 'active' : ''  }}"><a href="{{  route('admin.reports')}}"><i aria-hidden="true" class="fa fa-flag"></i> <span>Report</span> </a></li>
            </ul>
          </li>

          <li class="{{ Route::is('password_change') ? 'active' : ''  }}"><a href="{{  route('password_change') }}"><i aria-hidden="true" class="fa fa-lock"></i> <span>Change Password</span> </a></li>

    <!--    <li class="{{ Route::is('admin.users') ? 'active' : ''  }}"><a href="{{ route('admin.users') }}"><i aria-hidden="true" class="fa fa-circle-o"></i> Merchants</a></li>-->

        <!-- End of Blog -->
        <li class="header">Website Resources</li>
        <li><a href="#"><i aria-hidden="true" class="fa fa-newspaper-o text-red"></i> <span>NewsLetters Subscriptions</span></a></li>
        <li class="{{ Route::is('admin.contacts') ? 'active' : ''  }}"><a href="{{ route('admin.contacts') }}"><i aria-hidden="true" class="fa fa-phone text-yellow"></i> <span>Contacts Message</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <!-- <small>Control panel</small> -->
      </h1>
      @yield('breadcrumb')
    </section>

   <!-- Main Content Here-->
        @yield('body')
   <!-- Main Content Ends Here-->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017-2019 <a href="#!">Total Infotech and Telecoms Limited</a>.</strong> All rights
    reserved.
  </footer>



  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>


@stack('script')
</body>
</html>
