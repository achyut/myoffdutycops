@extends('backend.index')

@section('title', 'Blank page')

@section('page-css')
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}}" rel="stylesheet" />
<link href="{{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')
<!-- begin #content -->
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Page Options</a></li>
		<li class="active">Blank Page</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Blank Page <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Panel Title here</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<!-- begin col-3 -->
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-stats bg-green">
								<div class="stats-icon"><i class="fa fa-desktop"></i></div>
								<div class="stats-info">
									<h4>TOTAL STUDENTS</h4>
									<p>31</p>	
								</div>
								<div class="stats-link">
									<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
								</div>
							</div>
						</div>
						<!-- end col-3 -->
						<!-- begin col-3 -->
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-stats bg-blue">
								<div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
								<div class="stats-info">
									<h4>PENDING REQUESTS</h4>
									<p>15</p>	
								</div>
								<div class="stats-link">
									<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
								</div>
							</div>
						</div>
						<!-- end col-3 -->
						<!-- begin col-3 -->
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-stats bg-purple">
								<div class="stats-icon"><i class="fa fa-users"></i></div>
								<div class="stats-info">
									<h4>APPROVED REQUESTS</h4>
									<p>10</p>	
								</div>
								<div class="stats-link">
									<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
								</div>
							</div>
						</div>
						<!-- end col-3 -->
						<!-- begin col-3 -->
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-stats bg-red">
								<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
								<div class="stats-info">
									<h4>APPLIED TO COMMITTEE</h4>
									<p>12</p>	
								</div>
								<div class="stats-link">
									<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
								</div>
							</div>
						</div>
						<!-- end col-3 -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end #content -->

@endsection

@section('page-js')
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}}""></script>
	<script src="{{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}}""></script>
	<script src="{{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}}""></script>
	<script src="{{{ asset('assets/js/table-manage-default.demo.min.js') }}}""></script>
	
	<script src="{{{ asset('assets/js/apps.min.js') }}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			//Dashboard.init();
			TableManageDefault.init();
		});
	</script>
	
@endsection
