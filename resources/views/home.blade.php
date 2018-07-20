@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ut necessitatibus officiis libero eaque consectetur sit doloremque, laudantium similique ullam. Sit totam consectetur suscipit ipsam ad qui labore, nisi at.</p>
@endsection

@section('sidebar')
@parent
<p> (?) Homepage page is shown</p>
<a href="login">Login page</a>
@endsection