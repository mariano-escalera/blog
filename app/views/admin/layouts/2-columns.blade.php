@extends('layouts.main')

@section('columns')
	<!-- Single Row -->
	<div class="row">
		
		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-3">
			@include('admin.widgets.actions')
		</div>

		<!-- Blog Entries Column -->
		<div class="col-md-9">
			@yield('content')
		</div>

		

	</div>
	<!-- /.row -->
@stop