<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href={{asset("assets/vendor/bootstrap/css/bootstrap.css")}} />
		<link rel="stylesheet" href={{secure_asset("assets/vendor/bootstrap/css/bootstrap.css")}} />
		<link rel="stylesheet" href={{asset("assets/vendor/font-awesome/css/font-awesome.css")}} />
		<link rel="stylesheet" href={{secure_asset("assets/vendor/font-awesome/css/font-awesome.css")}} />

		<link rel="stylesheet" href={{asset("css/sweet-alert.css")}} />
	    <link rel="stylesheet" href={{asset("css/material-design-iconic-font.min.css")}} />
	    <link rel="stylesheet" href={{asset("css/normalize.css")}} />
	    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}} />
	    <link rel="stylesheet" href={{asset("css/style.css")}} />

		<link rel="stylesheet" href={{secure_asset("css/sweet-alert.css")}} />
	    <link rel="stylesheet" href={{secure_asset("css/material-design-iconic-font.min.css")}} />
	    <link rel="stylesheet" href={{secure_asset("css/normalize.css")}} />
	    <link rel="stylesheet" href={{secure_asset("css/bootstrap.min.css")}} />
	    <link rel="stylesheet" href={{secure_asset("css/style.css")}} />

		<!-- Theme CSS -->
		<link rel="stylesheet" href={{asset("assets/stylesheets/theme.css")}} />
		<link rel="stylesheet" href={{secure_asset("assets/stylesheets/theme.css")}} />

		<!-- Head Libs -->
		<script src={{asset("assets/vendor/modernizr/modernizr.js")}}></script>
		<script src={{secure_asset("assets/vendor/modernizr/modernizr.js")}}></script>
        
        @yield('estilos')
	</head>
	<body >
		<section class="body" style="background: url('/assets/images/unsaac.jpg');">

			<!-- start: header -->
			<h1>
				<header class="header" style="padding-left: 500px;" >
					<div class="logo-container">

						<div  >
							<img src="{{URL::asset('/assets/images/logop.png')}}" height="58" >&nbsp;&nbsp;<b>BIBLIOTECA DE TESIS</b></img>
						</div>
					</div>
				</header>
			</h1>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left" >
				
					<div class="sidebar-header" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
						
						<b><p class="text"  ><span style="font-size: 12pt">
							Administración de Tesis</span>
						</p></b>

						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">

							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>

						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span style="font-size: 12pt">Registro de usuarios</span>
										</a>
				                        <ul class="nav nav-children">
				                            <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
				                            <li><a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo docente</a></li>
				                            <li><a href="student.html"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo estudiante</a></li>
				                            <li><a href="personal.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo personal administrativo</a></li>
				                        </ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span style="font-size: 12pt">Tesis</span>
										</a>
										<ul class="nav nav-children">
				                            <li><a href="/control1/create" ><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de tesis</a></li>
				                            <li><a href="/control1"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo de tesis</a></li>
				                        </ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span style="font-size: 12pt">Préstamos de tesis </span>
										</a>
										<ul class="nav nav-children">
											<li><a href="loan.html"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
				                            <li>
				                                <a href="loanpending.html"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
				                            </li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span style="font-size: 12pt">Reportes</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
											</li>
											<li>
												<a>6.1.2 Segregación de tareas</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</nav>
						</div>


					</div>


				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body"  >
			        @yield('content')
				    <footer class="footer full-reset">
			            <div class="container-fluid">
			                <div class="row">
			                    <div class="col-xs-12 col-sm-6">
			                        <h4 class="all-tittles">Acerca de</h4>
			                        <p>
			                            Información de la institución
			                        </p>
			                    </div>
			                    <div class="col-xs-12 col-sm-6">
			                        <h4 class="all-tittles">Curso</h4>
			                        <ul class="list-unstyled">
			                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Ingeniería de Software <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
			                        </ul>
			                    </div>
			                </div>
			            </div>
			            <div class="footer-copyright full-reset all-tittles">Cusco-Perú 2019</div>
			        </footer>
                    
				</section>
			</div>

		</section>




    
		
		<!-- Vendor -->
		<script src={{asset("assets/vendor/jquery/jquery.js")}}></script>
		<script src={{secure_asset("assets/vendor/jquery/jquery.js")}}></script>
		<script src={{asset("assets/vendor/bootstrap/js/bootstrap.js")}}></script>
		<script src={{secure_asset("assets/vendor/bootstrap/js/bootstrap.js")}}></script>
		<script src={{asset("assets/vendor/nanoscroller/nanoscroller.js")}}></script>
		<script src={{secure_asset("assets/vendor/nanoscroller/nanoscroller.js")}}></script>
		
		
		<!-- Theme Base, Components and Settings -->
		<script src={{asset("assets/javascripts/theme.js")}}></script>
		<script src={{secure_asset("assets/javascripts/theme.js")}}></script>
		

		<!-- Examples -->
		<script src={{asset("assets/javascripts/dashboard/examples.dashboard.js")}}></script>
		<script src={{secure_asset("assets/javascripts/dashboard/examples.dashboard.js")}}></script>

        @yield('js')
        @yield('jsope')
	</body>
</html>