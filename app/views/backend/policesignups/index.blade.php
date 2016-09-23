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
	<h1 class="page-header">Police Signups</h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-tabs-inverse nav-justified-mobile" data-sortable-id="index-2">
				<li class="active"><a href="#new-entry" data-toggle="tab"><i class="fa fa-tasks m-r-5"></i> <span class="hidden-xs">All Police officers</span></a></li>
				<li><a href="{{ route('policesignups.create') }}" id="createtab"><i class="fa fa-plus m-r-5"></i> <span class="hidden-xs">Add new officer</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				
				<div class="tab-pane fade active in" id="new-entry">
					<div class="row">
						<div class="col-md-12">
							@if ($policesignups->count())
							<table class="table table-striped table-responsive" id="data-table">
								<thead>
									<tr>
										<th>Fname</th>
										<th>Lname</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Badgenumber</th>
										<th>Policeagency</th>
										<th>State</th>
										<th>Authorization</th>
										<th>&nbsp;</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($policesignups as $policesignup)
									<tr>
										<td>{{{ $policesignup->fname }}}</td>
										<td>{{{ $policesignup->lname }}}</td>
										<td>{{{ $policesignup->email }}}</td>
										<td>{{{ $policesignup->phone }}}</td>
										<td>{{{ $policesignup->badgenumber }}}</td>
										<td>{{{ $policesignup->policeagency }}}</td>
										<td>{{{ $policesignup->state }}}</td>
										<td>{{{ $policesignup->authorization }}}</td>
										<td>
											<!-- {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('policesignups.destroy', $policesignup->id))) }}
											{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
											{{ Form::close() }}
											 -->
											{{ link_to_route('policesignups.show', 'View', array($policesignup->id), array('class' => 'btn btn-default btn-xs')) }}

											{{ link_to_route('policesignups.edit', 'Edit', array($policesignup->id), array('class' => 'btn btn-info btn-xs')) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@else
							There are no policesignups
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
