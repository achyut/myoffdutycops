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
                    <div class="col-md-10 col-md-offset-2">
                        

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>

                {{ Form::model($policesignup, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('policesignups.update', $policesignup->id))) }}

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
    {{ Form::label('badgenumber', 'Badgenumber:', array('class'=>'col-md-2 control-label')) }}
    <div class="col-sm-10">
      {{ Form::text('badgenumber', Input::old('badgenumber'), array('class'=>'form-control', 'placeholder'=>'Badgenumber')) }}
  </div>
</div>

<div class="form-group">
    {{ Form::label('policeagency', 'Policeagency:', array('class'=>'col-md-2 control-label')) }}
    <div class="col-sm-10">
      {{ Form::text('policeagency', Input::old('policeagency'), array('class'=>'form-control', 'placeholder'=>'Policeagency')) }}
  </div>
</div>

<div class="form-group">
    {{ Form::label('state', 'State:', array('class'=>'col-md-2 control-label')) }}
    <div class="col-sm-10">
      {{ Form::text('state', Input::old('state'), array('class'=>'form-control', 'placeholder'=>'State')) }}
  </div>
</div>

<div class="form-group">
    {{ Form::label('authorization', 'Authorization:', array('class'=>'col-md-2 control-label')) }}
    <div class="col-sm-10">
      {{ Form::text('authorization', Input::old('authorization'), array('class'=>'form-control', 'placeholder'=>'Authorization')) }}
  </div>
</div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-sm btn-primary')) }}
      {{ link_to_route('policesignups.show', 'Cancel', $policesignup->id, array('class' => 'btn btn-sm btn-default')) }}
  </div>
</div>

{{ Form::close() }}

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
