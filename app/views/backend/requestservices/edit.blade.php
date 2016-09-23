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

       <div class="tab-content" data-sortable-id="index-3">

        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
                @endif
            </div>
                            {{ Form::model($requestservice, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('requestservices.update', $requestservice->id))) }}

                <div class="form-group">
                  {{ Form::label('fullname', 'Fullname:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('fullname', Input::old('fullname'), array('class'=>'form-control', 'placeholder'=>'Fullname')) }}
                  </div>
                </div>

                <div class="form-group">
                  {{ Form::label('company', 'Company:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('company', Input::old('company'), array('class'=>'form-control', 'placeholder'=>'Company')) }}
                  </div>
                </div>
                <div class="form-group">
                  {{ Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
                  </div>
                </div>

                <div class="form-group">
                  {{ Form::label('phone', 'Phone:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('phone', Input::old('phone'), array('class'=>'form-control', 'placeholder'=>'Phone')) }}
                  </div>
                </div>

                <div class="form-group">
                  {{ Form::label('location', 'Location:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('location', Input::old('location'), array('class'=>'form-control', 'placeholder'=>'Location')) }}
                  </div>
                </div>
                <div class="form-group">
                  {{ Form::label('status', 'Location:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('status', Input::old('status'), array('class'=>'form-control', 'placeholder'=>'Status')) }}
                  </div>
                </div>

                <div class="form-group">
                  {{ Form::label('dateandtime', 'Dateandtime:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::input('text', 'dateandtime', Input::old('dateandtime'), array('class'=>'form-control')) }}
                  </div>
                </div>

                <div class="form-group">
                  {{ Form::label('message', 'Message:', array('class'=>'col-md-2 control-label')) }}
                  <div class="col-sm-10">
                    {{ Form::text('request_message', Input::old('request_message'), array('class'=>'form-control', 'placeholder'=>'Message')) }}
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
                    {{ Form::submit('Update', array('class' => 'btn btn-sm btn-primary')) }}
                    {{ link_to_route('requestservices.show', 'Cancel', $requestservice->id, array('class' => 'btn btn-sm btn-default')) }}
                  </div>
                </div>

                {{ Form::close() }}
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
