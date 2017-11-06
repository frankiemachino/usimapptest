@extends('layout.layout')

@section('content')
	<usim-showcases></usim-showcases>
	{{-- @if(isset($showcases))
		@foreach($showcases as $showcase)
			<usim-showcase></usim-showcase>
		@endforeach
	@else
		<div>The showcases don't seem to be found...</div>
	@endif --}}
	
@endsection