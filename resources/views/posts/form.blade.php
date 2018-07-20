<header class="post-header">
	<h1 class="box-heading">{{$title}}</h1>
</header>

<div class="form-group">
	{!!Form::text('title', null, [
		'class' => 'form-control',
		'placeholder' => 'title your shit'
	]) !!}
</div>

<div class="form-group">
	{!!Form::textarea('text', null, [
		'class' => 'form-control',
		'placeholder' => 'write your shit',
		'rows' => 16
	]) !!}
</div>

<div class="form-group">
	@foreach($tags as $tag)
		<label class="checkbox">
			{!! Form::checkbox('tags[]', $tag->id) !!}
			{{$tag->name}}
		</label>
	@endforeach
</div>

<div class="form-group">
	{!!Form::button($title, [
		'class' => 'form-control',
		'type' => 'submit'
	]) !!}
</div>

<span class="or">
	or <a href="{{url('post')}}">cacnel</a>
</span>