

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8">

{!! Form::open(['url' => '/register', 'method' => 'post', 'class' => 'box box-auth']) !!}

    <h2 class="box-auth-heading">Register</h2>

        <div class="form-group">
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'name',
            'required' => true,
            'autofocus' => true
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::email('email', null, [
            'class' => 'form-control',
            'placeholder' => 'email@adress',
            'required' => true
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', [
            'class' => 'form-control',
            'placeholder' => 'password',
            'required' => true
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password_confirmation', [
            'class' => 'form-control',
            'placeholder' => 'password, again',
            'required' => true
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::button('Register', [
            'type' => 'submit',
            'class' => 'btn btn-lg btn-primary btn-block'
        ]) !!}
    </div>

    <p class="alt-action text-center">
        or <a href="{{ url('login') }}">log in</a>
    </p>

{!! Form::close() !!}

</div>
</div>

@endsection