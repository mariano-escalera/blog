@extends('layouts.main')

@section('columns')
	<!-- Single Row -->
	<div class="row">
		
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			@yield('content')
		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">

			@include('widgets.search')

			@include('widgets.categories')

			@include('widgets.simple-well')

		</div>

	</div>
	<!-- /.row -->
@stop