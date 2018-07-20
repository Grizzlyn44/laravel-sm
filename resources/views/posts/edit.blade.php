@extends('layouts.app')

@section('content')

<section>

{!! Form::model($post, ['url' => ['post', $post->id],'method' =>'put', 'class' => 'post']) !!}

@include('posts.form')

{!! Form::close() !!}

</section>

@endsection