@extends('layouts.app')

@section('content')

<section>
	<h1>{{ $title or "This is a blog , fool" }}</h1>
	

	@forelse($posts as $post)

	<article class="post">
		<h1><a href="{{url('post', $post->id)}}">{{$post->title}}</a></h1>
		<time>{{$post->created_at}}</time>
		<p>{{ $post->teaser  }}</p>
		<p class="read-more"><a href="{{url('post', $post->id)}}">read more</a></p>

			<p class="written-by"> - written by: <a href="{{ url('user', $post->user->id) }}">{{ $post->user->email }}</a></p>

			@include('inc.tags')
	</article>

	@empty
		<p>We got nutin man :(</p>

	@endforelse

</section>

@endsection

@section('sidebar')
@parent
<a href="{{url('post/create')}}" class="btn btn-lg btn-primary btn-block mt-4">Create new post</a>
@endsection