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
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Job Details<small> #</small></h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<!-- begin panel -->
                    <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-widget-9">
                        <div class="panel-heading">
                            <ul id="myTab" class="nav nav-tabs nav-tabs-inverse pull-left">
                                <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-cog"></i> <span class="hidden-xs">Details</span></a></li>
                                <li><a href="#receipts" data-toggle="tab"><i class="fa fa-file-text"></i> <span class="hidden-xs">Applicants</span></a></li>
                                <li><a href="#profile" data-toggle="tab"><i class="fa fa-tasks"></i> <span class="hidden-xs">Messages</span></a></li>
                            </ul>
                            <h4 class="panel-title" style="visibility:hidden">Panel with Tabs</h4>
                        </div>
                        <div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<a href="#" class="btn btn-primary btn-sm"> Cops</a>
								<a href="#" class="btn btn-primary btn-sm">Edit Job</a>
								<br>
                                <dl>
								<dt>Description lists</dt>
								<dd>A description list is perfect for defining terms.</dd>
								<br>
								<dt>Euismod</dt>
								<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
								<dd>Donec id elit non mi porta gravida at eget metus.</dd>
								<br>
								<dt>Malesuada porta</dt>
								<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
							</dl>
                            </div>
                            <div class="tab-pane fade table-responsive" id="profile">
								
                                <table class="table">
									<thead>
										<tr>
											<th>Timestamp</th>
											<th>Tech name</th>
											<th>Update</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>12-30-2016 14:13:22</td>
											<td>Nicky Almera</td>
											<td>Screen bigiyeko aawastha</td>
										</tr>
										<tr>
											<td>12-30-2016 14:13:22</td>
											<td>Edmund Wong</td>
											<td>edmund@yahoo.com</td>
										</tr>
										<tr>
											<td>12-30-2016 14:13:22</td>
											<td>Harvinder Singh</td>
											<td>harvinder@gmail.com</td>
										</tr>
										<tr>
											<td>12-30-2016 14:13:22</td>
											<td>Terry Khoo</td>
											<td>terry@gmail.com</td>
										</tr>
									</tbody>
								</table>
                            </div>
                            <div class="tab-pane fade in active" id="receipts">
                                Receipts
							</dl>
                            </div>
                            
                        </div>
                    </div>
			        <!-- end panel -->
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
