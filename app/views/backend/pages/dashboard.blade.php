@extends('backend.index')

@section('title', 'Dashboard')

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
		<li class="active">Dashboard</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Dashboard</h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row animated fadeInLeft">
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon"><i class="fa fa-refresh"></i></div>
				<div class="stats-info">
					<h4>No of New Jobs</h4>
					<p>112</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>Current Jobs</h4>
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
			<div class="widget widget-stats bg-purple">
				<div class="stats-icon"><i class="fa fa-check-square-o"></i></div>
				<div class="stats-info">
					<h4>PENDING Jobs</h4>
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
			<div class="widget widget-stats bg-orange-lighter">
				<div class="stats-icon"><i class="fa fa-crosshairs"></i></div>
				<div class="stats-info">
					<h4>APPLIED</h4>
					<p>12</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->

	<div class="row">
		<!-- begin col-8 -->
		<div class="col-md-12 ui-sortable">
			
			<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
				<li class="active"><a href="index.html#latest-post" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">Pending Jobs</span></a></li>
				<li class=""><a href="index.html#purchase" data-toggle="tab"><i class="fa fa-shopping-cart m-r-5"></i> <span class="hidden-xs">Current Jobs</span></a></li>
				<li class=""><a href="index.html#email" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Archieved</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				<div class="tab-pane fade active in" id="latest-post">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Make/Model</th>
								<th>Serial Number</th>
								<th>Customer Name</th>
								<th>Problem Description</th>
								<th>Current Status</th>
								<th>Update Log</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>
									<select class="form-control">
										<option><span class="label label-warning">Pending</span></option>
										<option><span class="label label-primary">Ready</span></option>
									</select>

								

								</td>
								<td><p contenteditable="true">Teska baaje ko thado magaako aaipugya hoina!!</p></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="purchase">
					
				</div>
				
				<div class="tab-pane fade" id="email">
					
				</div>
			</div>
			
		</div>
		<!-- end col-8 -->
		
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
