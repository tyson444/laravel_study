@extends('layouts.app')

@section('content')
<div class="container">
	<h1>포럼 글 목록</h1>
	<hr/>
	<ul>
		@forelse($articles as $article)
		<li>
			{{$article->title}}
			<small>
				by {{$article->user->name}}
			</small>
		</li>
		@empty
		<p>글이 없습니다.</p>
		@endforelse
	</ul>
</div>
@stop
<!--stop안하면 메뉴가 밑으로 가고, 하면 위로 올라옴. -->