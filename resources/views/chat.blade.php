@extends('layouts.app')
@section('title', 'Chatroom')

@section('content')
	<div id="app">
		<h1>Chatroom</h1>
		<span class="bade">@{{ usersInRoom.length }}</span>
		<chat-log :messages="messages"></chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
	</div>
@endsection