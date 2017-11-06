<footer>
	<div class="footer-sections">
		<div class="footer-navigation">
			Navigation
			<div class="menu">
				<a href="/">Home</a>
				@foreach($menu as $item)
					<a href="{{ url('/').'/'.$item->uri }}">{{ $item->label }}</a>
				@endforeach
			</div>
		</div>
		<div class="footer-instagram">
		</div>
		<div class="newsletter">
			<div class="newsletter-before">Keep up with US in Made</div>
			<form>
				<input type="text" /><button type="submit">SIGN UP</button>
			</form>
			<div class="newsletter-after">Sign up to receive our  email newsletter</div>

			<div class="social-icons">
				<a href="#">
					<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
				</a>

				<a href="#">
					<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
				</a>

				<a href="#">
					<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
				</a>

				<a href="#">
					<i class="fa fa-pinterest fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>

	</div>

	<div class="closing-footer">
		<div class="copyright">
			<a href="#">Terms and Conditions</a>
			<a href="#">Privacy Policy</a>
			<div>© 2017 USinMade</div>
		</div>
	</div>
</footer>