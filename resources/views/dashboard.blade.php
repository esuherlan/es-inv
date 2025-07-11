@extends('layout')

@section('content')
	<div class="app-content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-end">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="app-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
						<div class="info-box">
							<span class="info-box-icon text-bg-primary shadow-sm">
							<i class="bi bi-gear-fill"></i>
							</span>
							<div class="info-box-content">
							<span class="info-box-text">CPU Traffic</span>
							<span class="info-box-number">
								10
								<small>%</small>
							</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
						<div class="info-box">
							<span class="info-box-icon text-bg-danger shadow-sm">
							<i class="bi bi-hand-thumbs-up-fill"></i>
							</span>
							<div class="info-box-content">
							<span class="info-box-text">Likes</span>
							<span class="info-box-number">41,410</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
						<div class="info-box">
							<span class="info-box-icon text-bg-success shadow-sm">
							<i class="bi bi-cart-fill"></i>
							</span>
							<div class="info-box-content">
							<span class="info-box-text">Sales</span>
							<span class="info-box-number">760</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
						<div class="info-box">
							<span class="info-box-icon text-bg-warning shadow-sm">
							<i class="bi bi-people-fill"></i>
							</span>
							<div class="info-box-content">
							<span class="info-box-text">New Members</span>
							<span class="info-box-number">2,000</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
				</div>
			</div>
		</div>
	</div>
@endsection