@extends('layouts.app')

@section('content')

<section>

{!! Form::open(['url' => 'post','method' =>'post', 'class' => 'post']) !!}

@include('posts.form')

{!! Form::close() !!}

</section>

@endsection