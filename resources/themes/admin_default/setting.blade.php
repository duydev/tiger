@extends( 'layouts.default' )

@php
Theme::configSet( 'page-title', trans( 'admin.settings' ) );
@endphp

@section( 'content-header' )
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ trans( 'admin.settings' ) }}
    <small>Cài đặt thông tin cho website</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url( config( 'admin.prefix' ) ) }}"><i class="fa fa-dashboard"></i> {{ trans( 'admin.dashboard' ) }}</a></li>
    <li class="active"> {{ trans( 'admin.settings' ) }}</li>
  </ol>
</section>
@endsection

@section( 'content' )
@if( session( 'success' ) )
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<p><i class="icon fa fa-check"></i> {{ session( 'success' ) }}</p>
</div>
@endif
<form action="{{ url( config( 'admin.prefix' ).'/setting' ) }}" method="POST">
{{ csrf_field() }}
<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{{ trans( 'admin.general' ) }}</a>
        </li>
        <li><a href="#image" data-toggle="tab" aria-expanded="true">{{ trans( 'admin.image' ) }}</a>
        </li>
        <li class="pull-right">
			<button type="submit" class="btn btn-primary">Lưu</button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="general">
			<div class="form-group">
				<label for="">Tên website</label>
				<input type="text" name="sitename" id="" value="{{ config( 'settings.sitename' ) }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Mô tả</label>
				<input type="text" name="description" id="" value="{{ config( 'settings.description' ) }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Từ khóa</label>
				<input type="text" name="keywords" id="" value="{{ config( 'settings.keywords' ) }}" class="form-control">
			</div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="image">
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->
</form>
@endsection

@push( 'scripts' )
<script type="text/javascript">
	$(document).ready(function(){
		$(".alert").fadeTo(2000, 500).slideUp(500, function(){
		    $(".alert").slideUp(500);
		});
	});
</script>
@endpush