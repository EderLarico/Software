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

		<!-- Theme CSS -->
		<link rel="stylesheet" href={{asset("assets/stylesheets/theme.css")}} />
		<link rel="stylesheet" href={{secure_asset("assets/stylesheets/theme.css")}} />

		<!-- Head Libs -->
		<script src={{asset("assets/vendor/modernizr/modernizr.js")}}></script>
		<script src={{secure_asset("assets/vendor/modernizr/modernizr.js")}}></script>
        
        @yield('estilos')
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
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
											<span>5. Politicas de seguridad</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>5.1 Directrices de la Dirección en seguridad de la información</a>
												<ul class="nav nav-children">
													<li>
														<a>5.1.1 Conjunto de políticas para la seguridad de la información.</a>
													</li>
													<li>
														<a>5.1.2 Revisión de las políticas para la seguridad de la información.</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>6. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
													<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
													<ul class="nav nav-children">
														<li>
															<a>6.2.1 Política de uso de dispositivos para movilidad</a>
														</li>
														<li>
															<a>6.2.2 Teletrabajo</a>
														</li>
													</ul>
												</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>7. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>8. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>9. CONTROL DE ACCESOS.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>9.1 Requisitos de negocio para el control de accesos</a>
												<ul class="nav nav-children">
													<li>
														<a href="/control1">9.1.1 Política de control de accesos</a>
													</li>
													<li>
														<a href="/control2">9.1.2 Control de acceso a las redes y servicios asociados</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>9.2 Gestión de acceso de usuario.</a>
												<ul class="nav nav-children">
													<li>
														<a>9.2.1 Gestión de altas/bajas en el registro de usuarios.</a>
													</li>
													<li>
														<a>9.2.2 Gestión de los derechos de acceso asignados a usuarios</a>
													</li>
													<li>
														<a>9.2.3 Gestión de los derechos de acceso con privilegios especiales</a>
													</li>
													<li>
														<a>9.2.4 Gestión de información confidencial de autenticación de usuarios. </a>
													</li>
													<li>
														<a>9.2.5 Revisión de los derechos de acceso de los usuarios</a>
													</li>
													<li>
														<a>9.2.6 Retirada o adaptación de los derechos de acceso</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>9.3 Responsabilidades del usuario.</a>
												<ul class="nav nav-children">
													<li>
														<a>9.3.1 Uso de información confidencial para la autenticación.</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>9.4 Control de acceso a sistemas y aplicaciones.</a>
												<ul class="nav nav-children">
													<li>
														<a>9.4.1 Restricción del acceso a la información</a>
													</li>
													<li>
														<a>9.4.2 Procedimientos seguros de inicio de sesión</a>
													</li>
													<li>
														<a>9.4.3 Gestión de contraseñas de usuarin</a>
													</li>
													<li>
														<a>9.4.4 Uso de herramientas de administración de sistemas</a>
													</li>
													<li>
														<a>9.4.5 Control de acceso al código fuente de los programas</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>10. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>11. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>12. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>13. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>14. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>15. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>16. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>17. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>18. ASPECTOS ORGANIZATIVOS DE LA SEGURIDAD DE LA INFORMAC.</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>6.1 Organización interna</a>
												<ul class="nav nav-children">
													<li>
														<a>6.1.1 Asignación de responsabilidades para la segur. de la información</a>
													</li>
													<li>
														<a>6.1.2 Segregación de tareas</a>
													</li>
													<li>
														<a>6.1.3 Contacto con las autoridades</a>
													</li>
													<li>
														<a>6.1.4 Contacto con grupos de interés especial</a>
													</li>
													<li>
														<a>6.1.5 Seguridad de la información en la gestión de proyectos</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>6.2 Dispositivos para movilidad y teletrabajo.</a>
												<ul class="nav nav-children">
													<li>
														<a>6.2.1 Política de uso de dispositivos para movilidad</a>
													</li>
													<li>
														<a>6.2.2 Teletrabajo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
                    @yield('content')
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