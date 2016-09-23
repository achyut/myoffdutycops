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
			
			<div class="tab-content" data-sortable-id="index-3">
				
				<div class="row">
          <div class="col-md-12">


            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
              </ul>
            </div>
            @endif

            {{ Form::model($contact, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('contacts.update', $contact->id))) }}

        <div class="form-group">
            {{ Form::label('fname', 'Fname:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('fname', Input::old('fname'), array('class'=>'form-control', 'placeholder'=>'Fname')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('lname', 'Lname:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('lname', Input::old('lname'), array('class'=>'form-control', 'placeholder'=>'Lname')) }}
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
            {{ Form::label('message', 'Message:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('contact_message', Input::old('contact_message'), array('class'=>'form-control', 'placeholder'=>'Message')) }}
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-10">
              {{ Form::submit('Update', array('class' => 'btn btn-sm btn-primary')) }}
              {{ link_to_route('contacts.show', 'Cancel', $contact->id, array('class' => 'btn btn-sm btn-default')) }}
            </div>
        </div>

        {{ Form::close() }}

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
