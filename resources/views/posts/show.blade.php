@extends('layouts.app')

@section('content')

<section class="full-post">
	<h1><a href="{{URL::current()}}">{{$post->title}}</a></h1>
	<time>{{$post->created_at}}</time>
	<p>
		{{$post->text}}
	</p>
	<p class="written-by"> - written by: <a href="{{ url('user', $post->user->id) }}">{{ $post->user->email }}</a></p>
	@include('inc.tags')
</section>

@endsection

@can('edit-post', $post)
	@section('sidebar')
		@parent
			<a href="{{ url('post/'.$post->id, 'edit') }}" class="btn btn-lg btn-primary btn-block mt-4">Edit this post</a>
	@endsection
@endcan