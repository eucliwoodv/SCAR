<html>
    <head>
        <title>Titulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('Recursos/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="{{ asset('Recursos/css/style.css') }}" rel='stylesheet' type='text/css' />
        <!-- font-awesome icons CSS -->
        <link href="{{ asset('Recursos/css/font-awesome.css') }}" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->
         <!-- side nav css file -->
         <link href="{{ asset('Recursos/css/SidebarNav.min.css') }}" media='all' rel='stylesheet' type='text/css'/>
         <!-- side nav css file -->
         <!-- js-->
        <script src="{{ asset('Recursos/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('Recursos/js/modernizr.custom.js') }}"></script>
        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 
        <!-- Metis Menu -->
        <script src="{{ asset('Recursos/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('Recursos/js/custom.js') }}"></script>
        <link href="{{ asset('Recursos/css/custom.css') }}" rel="stylesheet">
        <!--//Metis Menu -->
    </head>
    <body class="cbp-spmenu-push">
        <div class="main-content">
            <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
          <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="#"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                  <li class="header">MENÚ</li>
                  <li class="treeview">
                    <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Components</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
                      <li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
                    </ul>
                  </li>

                  <li class="header">LABELS</li>
                  <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
          </nav>
        </aside>
        </div>
            <!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section " style="padding-bottom:10px">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
			</div>
			<div class="header-right">
                
			</div>
		</div>
		<!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    @yield('contenido')
                    <h2 class="title1">Blank Page</h2>
                    <div class="blank-page widget-shadow scroll" id="style-2 div1">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.
                        </p>
                    </div>
                </div>
            </div>
            <!--footer-->
            <div class="footer">
               <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
           </div>
            <!--//footer-->
        </div>
        <!-- side nav js -->
        <script src="{{ asset('Recursos/js/SidebarNav.min.js') }}" type='text/javascript'></script>
        <script>
          $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->
        <!-- Classie --><!-- for toggle left push menu script -->
        <script src="{{ asset('Recursos/js/classie.js') }}"></script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;

            showLeftPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeftPush' );
            };

            function disableOther( button ) {
                if( button !== 'showLeftPush' ) {
                    classie.toggle( showLeftPush, 'disabled' );
                }
            }
        </script>
        <!-- //Classie --><!-- //for toggle left push menu script -->
        <!--scrolling js-->
        <script src="{{ asset('Recursos/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('Recursos/js/scripts.js') }}"></script>
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
       <script src="{{ asset('Recursos/js/bootstrap.js') }}"> </script>
    </body>
</html>