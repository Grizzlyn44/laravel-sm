

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8">

{!! Form::open(['url' => '/login', 'method' => 'post', 'class' => 'box box-auth']) !!}

    <h2 class="box-auth-heading">Login</h2>

    <div class="form-group">
        {!! Form::email('email', null, [
            'class' => 'form-control',
            'placeholder' => 'email@adress',
            'required' => true,
            'autofocus' => true
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', [
            'class' => 'form-control',
            'placeholder' => 'password',
            'required' => true
        ]) !!}
    </div>

    <label class="checkbox">
        {!! Form::checkbox('remember', 'remember', true) !!}
        Remember me
    </label>

    <div class="form-group">
        {!! Form::button('Login', [
            'type' => 'submit',
            'class' => 'btn btn-lg btn-primary btn-block'
        ]) !!}
    </div>

    <p class="alt-action text-center">
        or <a href="{{ url('register') }}">create account</a>
    </p>

{!! Form::close() !!}

</div>
</div>

@endsection