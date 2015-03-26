@extends('layouts.2-columns')


@section('content')
	@include('posts.partials._header')

	@foreach($posts as $post)
	    @include('posts.partials._item', compact('post'))
	    <hr>
	@endforeach

	@include('posts.partials._pager')
@stop