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
		<li class="active">Jobs</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Jobs</h1>
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
				<li class="active"><a href="#newjobs" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">New Service Request</span></a></li>
				<li><a href="#unassigned-jobs" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">Unfulfilled Jobs</span></a></li>
				<li class=""><a href="#assigned-jobs" data-toggle="tab"><i class="fa fa-shopping-cart m-r-5"></i> <span class="hidden-xs">Assigned Jobs</span></a></li>
				<li class=""><a href="#completed-jobs" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Completed</span></a></li>
				<li class=""><a href="#archived-jobs" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Archieved</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				<div class="tab-pane fade active in" id="newjobs">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Location</th>
								<th>#Required</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>Bhrartpur - 14</td>
								<td>3</td>
								<td>
									<a href="#logs-dialog" class="btn btn-primary btn-xs" data-toggle="modal">Approve</a>
									<a href="#logs-dialog" class="btn btn-primary btn-xs" data-toggle="modal">Edit</a>
									<a href="#upload-receipt" class="btn btn-xs btn-success" data-toggle="modal">Reply</a>
									<a href="/job-details" class="btn btn-xs btn-link">Details</a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				
				<!-- #Upload picture modal-dialog -->
				<div class="modal fade" id="upload-receipt">
					<div class="modal-dialog">
						<div class="modal-content">
							<form class="form-horizontal" action="#" data-parsley-validate="true" enctype="multipart/form-data">
								
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title">Upload receipt pictures for this repair</h4>
							</div>
							<div class="modal-body">
								
								<div class="form-group">
									<label class="col-md-3 control-label">Message</label>
									<div class="col-md-9">
										This is an original message
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">Reply</label>
									<div class="col-md-9">
										<textarea class="form-control" placeholder="Remarks" rows="5"></textarea>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a href="javascript:;" class="btn btn-sm btn-link" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-sm btn-success">Submit</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade" id="unassigned-jobs">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Required</th>
								<th>Assigned</th>
								<th>#Applicants</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>3</td>
								<td>1</td>
								<td>10</td>
								<td>
									<a href="#upload-receipt" class="btn btn-primary btn-xs" data-toggle="modal">Assign Cop</a>
									<a href="#logs-dialog" class="btn btn-primary btn-xs" data-toggle="modal">Find Cops</a>
									<a href="/job-details" class="btn btn-xs btn-link">Details</a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="assigned-jobs">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>#Assigned</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>3</td>
								<td>
									<a href="#upload-receipt" class="btn btn-primary btn-xs" data-toggle="modal">View Assigned</a>
									<a href="/job-details" class="btn btn-xs btn-link">Details</a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="completed-jobs">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>#Assigned</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>3</td>
								<td>
									<a href="#upload-receipt" class="btn btn-primary btn-xs" data-toggle="modal">View Feedback</a>
									<a href="#upload-receipt" class="btn btn-primary btn-xs" data-toggle="modal">Add Remark</a>
									<a href="#upload-receipt" class="btn btn-primary btn-xs" data-toggle="modal">Close Job</a>
									<a href="/job-details" class="btn btn-xs btn-link">Details</a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="archived-jobs">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>#Assigned</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td><p contenteditable="true">MacBook Pro A1286</p></td>
								<td><p contenteditable="true">1234567890</p></td>
								<td><p contenteditable="true">Rame</p></td>
								<td><p contenteditable="true">Pani Pasera Barbaad</p></td>
								<td>3</td>
								<td>
									<a href="/job-details" class="btn btn-xs btn-link">Details</a>
								</td>
							</tr>
						</tbody>
					</table>
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
