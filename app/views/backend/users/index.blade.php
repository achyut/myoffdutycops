@extends('backend.index')

@section('title', 'Users')

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
	<h1 class="page-header">Users</h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-tabs-inverse nav-justified-mobile" data-sortable-id="index-2">
				<li class="active"><a href="#new-entry" data-toggle="tab"><i class="fa fa-tasks m-r-5"></i> <span class="hidden-xs">All Users</span></a></li>
				<li><a href="{{ route('users.create') }}" id="createtab"><i class="fa fa-plus m-r-5"></i> <span class="hidden-xs">Add new user</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				
				<div class="tab-pane fade active in" id="new-entry">
					<div class="row">
						<div class="col-md-12">
							@if ($users->count())
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Name</th>
										<th>Username</th>
										<th>Email</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($users as $user)
										<tr>
											<td>{{{ $user->name }}}</td>
											<td>{{{ $user->username }}}</td>
											<td>{{{ $user->email }}}</td>
											<td>
						                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
						                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
						                        {{ Form::close() }}
						                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-xs btn-info')) }}
						                    </td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							There are no users
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