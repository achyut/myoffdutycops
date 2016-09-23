@extends('backend.index')

@section('title', 'News')

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
	<h1 class="page-header">News</h1>
	<!-- end page-header -->
	
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-tabs-inverse nav-justified-mobile" data-sortable-id="index-2">
				<li class="active"><a href="#new-entry" data-toggle="tab"><i class="fa fa-tasks m-r-5"></i> <span class="hidden-xs">All news articles</span></a></li>
				<li><a href="{{ route('news.create') }}" id="createtab"><i class="fa fa-plus m-r-5"></i> <span class="hidden-xs">Add new news</span></a></li>
			</ul>
			<div class="tab-content" data-sortable-id="index-3">
				
				<div class="tab-pane fade active in" id="new-entry">
					<div class="row">
						<div class="col-md-12">
							@if ($news->count())
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Title</th>
											<th>Date</th>
											<th>Category</th>
											<th>Source</th>
											<th>&nbsp;</th>
										</tr>
									</thead>

									<tbody>
										@foreach ($news as $news)
											<tr>
												<td>{{ link_to_route('news.show',$news->title, $news->id) }}</td>
												<td>{{{ $news->date }}}</td>
												<td>{{{ $news->category }}}</td>
												<td>{{{ $news->source }}}</td>
												<td>
							                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('news.destroy', $news->id))) }}
							                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
							                        {{ Form::close() }}
							                        {{ link_to_route('news.edit', 'Edit', array($news->id), array('class' => 'btn btn-xs btn-info')) }}

							                    </td>
											</tr>
										@endforeach
									</tbody>
								</table>
							@else
								There are no news
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
