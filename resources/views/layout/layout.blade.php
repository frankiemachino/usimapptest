@extends('template')

@section('body')
<div id="app" class="app">
	@include('layout.header')
	<main>
		@yield('content')
	</main>
	@include('layout.footer')
</div>
@include('append')
@endsection