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
	<h1 class="page-header">Edit news</h1>
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

            {{ Form::model($news, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('news.update', $news->id))) }}

        <div class="form-group">
            {{ Form::label('title', 'Title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('title', Input::old('title'), array('class'=>'form-control', 'placeholder'=>'Title')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('date', 'Date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('date', 'date', Input::old('date'), array('class'=>'form-control', 'placeholder'=>'Date')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('category', 'Category:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('category', Input::old('category'), array('class'=>'form-control', 'placeholder'=>'Category')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('source', 'Source:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('source', Input::old('source'), array('class'=>'form-control', 'placeholder'=>'Source')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('pic_link', 'Pic_link:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('pic_link', Input::old('pic_link'), array('class'=>'form-control', 'placeholder'=>'Pic_link')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('shortdesc', 'Shortdesc:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('shortdesc', Input::old('shortdesc'), array('class'=>'form-control ckeditor','id'=>'ckeditor1','rows'=>'20', 'placeholder'=>'Shortdesc')) }}
            </div>
        </div>


        <div class="form-group">
            {{ Form::label('longdesc', 'Longdesc:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('longdesc', Input::old('longdesc'), array('class'=>'form-control ckeditor','id'=>'ckeditor1','rows'=>'20', 'placeholder'=>'Longdesc')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-sm btn-primary')) }}
      {{ link_to_route('news.show', 'Cancel', $news->id, array('class' => 'btn btn-sm btn-default')) }}
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
  <script src="{{{ asset('assets/plugins/ckeditor/ckeditor.js') }}}"></script>
  
  <script src="{{{ asset('assets/js/form-wysiwyg.demo.min.js') }}}"></script>
  <script src="{{{ asset('assets/js/apps.min.js') }}}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

  <script>
   $(document).ready(function() {
    App.init();
		});
	</script>
	
	@endsection
