@extends('layouts.app')

@section('content')

<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus tempora modi animi debitis, dicta facere reiciendis suscipit fuga nulla tenetur nesciunt, temporibus! Quaerat animi, atque architecto totam, provident veniam dolor!</p>

{!! Form::open(['url' => 'contact/submit']) !!}
	<div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('name', '', ['class' => 'form-controll', 'placeholder' => 'Enter name'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'E-mail adress')}}
		{{Form::text('email', '', ['class' => 'form-controll', 'placeholder' => 'example@gmail.com'])}}
	</div>
	<div class="form-group">
		{{Form::label('message', 'Message')}}
		{{Form::textarea('message', '', ['class' => 'form-controll', 'placeholder' => 'Enter message'])}}
	</div>

	<div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	</div>
{!! Form::close() !!}

@endsection