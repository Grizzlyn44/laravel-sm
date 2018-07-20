@if($post->tags)
	<p class="tags">
		@foreach($post->tags as $tag)
			<a href="{{ url('tag', $tag->id) }}" class="red_tag"> {{ $tag->name }}</a>
			@endforeach
	</p>
@endif