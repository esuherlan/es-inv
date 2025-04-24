<!doctype html>
<html lang="en">
   <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>AdminLTE | Dashboard v2</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta name="title" content="AdminLTE | Dashboard v2" />
    	<meta name="author" content="ColorlibHQ" />
    	<meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."/>
    	<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous"/>
    	<link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"/>
  	</head>
  	<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    	<div class="app-wrapper">
			<nav class="app-header navbar navbar-expand bg-body">
				<div class="container-fluid">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
								<i class="bi bi-list"></i>
							</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link" data-widget="navbar-search" href="#" role="button">
								<i class="bi bi-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown user-menu">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
								<img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image"/>
								<span class="d-none d-md-inline">Elan Suherlan</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
								<li class="user-header text-bg-primary">
									<img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
									<p>
										Elan Suherlan - Web Developer
										<small>Member since Nov. 2023</small>
									</p>
								</li>
								<li class="user-footer">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
									<a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end">Sign out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
				<div class="sidebar-brand">
					<a href="#" class="brand-link">
						<img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"/>
						<span class="brand-text fw-light">AdminLTE 4</span>
					</a>
				</div>
				<div class="sidebar-wrapper">
					<nav class="mt-2">
						<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
							<li class="nav-header">MENU</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon bi bi-speedometer"></i>
									<p>Dashboard</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>
			<main class="app-main">
				@yield('content')
			</main>
			<footer class="app-footer">
				<strong>Copyright &copy; 2025&nbsp; Elan Suherlan.</strong>
				All rights reserved.
			</footer>
    	</div>
    
		<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    	<script src="{{ asset('assets/js/adminlte.js') }}"></script>
    	<script>
			const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
			const Default = {
				scrollbarTheme: 'os-theme-light',
				scrollbarAutoHide: 'leave',
				scrollbarClickScroll: true,
			};
			document.addEventListener('DOMContentLoaded', function () {
				const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
				if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
					OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
						scrollbars: {
						theme: Default.scrollbarTheme,
						autoHide: Default.scrollbarAutoHide,
						clickScroll: Default.scrollbarClickScroll,
						},
					});
				}
			});
    	</script>
  	</body>
</html>