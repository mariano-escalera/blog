@extends('layouts.2-columns')


@section('content')
	<!-- Blog Post -->

	@include('posts.partials._article')

	<!-- Blog Comments -->

	@include('comments._form')

	<hr>

	<!-- Posted Comments -->

	@foreach($post['comments'] as $comment)
		@include('comments._item', compact('comment'))
	@endforeach

	{{--@include('comments._item_nested')--}}

@stop