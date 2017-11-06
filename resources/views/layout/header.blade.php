<header>
	<a href="{{ url('/') }}" class="logo">
		<img src="img/usinmade_logo.png" />
	</a>

	
	<div class="search">
		<input type="text" name="search" />
		<i class="fa fa-search fa-lg" aria-hidden="true"></i>
	</div>
	<nav>
		@foreach($menu as $item)
			<a href="{{ url('/').'/'.$item->uri }}">{{ $item->label }}</a>
		@endforeach
	</nav>
</header>