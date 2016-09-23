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
	<!-- begin page-header -->
	<h1 class="page-header">Request Services</h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-tabs-inverse nav-justified-mobile" data-sortable-id="index-2">
				<li class="active"><a href="#new-entry" data-toggle="tab"><i class="fa fa-tasks m-r-5"></i> <span class="hidden-xs">All Request Services</span></a></li>
				<li><a href="{{ route('requestservices.create') }}" id="createtab"><i class="fa fa-plus m-r-5"></i> <span class="hidden-xs">Add new request service</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				
				<div class="tab-pane fade active in" id="new-entry">
					<div class="row">
						<div class="col-md-12">
						@if ($requestservices->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Fullname</th>
				<th>Company</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Location</th>
				<th>Status</th>
				<th>Dateandtime</th>
				<th>Message</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($requestservices as $requestservice)
				<tr>
					<td>{{{ $requestservice->fullname }}}</td>
					<td>{{{ $requestservice->company }}}</td>
					<td>{{{ $requestservice->email }}}</td>
					<td>{{{ $requestservice->phone }}}</td>
					<td>{{{ $requestservice->status }}}</td>
					<td>{{{ $requestservice->location }}}</td>
					<td>{{{ $requestservice->dateandtime }}}</td>
					<td>{{{ $requestservice->request_message }}}</td>
                    <td>
                        <!-- {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('requestservices.destroy', $requestservice->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                        {{ Form::close() }}
                         -->
                        {{ link_to_route('requestservices.show', 'View', array($requestservice->id), array('class' => 'btn btn-xs btn-default')) }}

                        {{ link_to_route('requestservices.edit', 'Edit', array($requestservice->id), array('class' => 'btn btn-xs btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no requestservices
@endif

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
