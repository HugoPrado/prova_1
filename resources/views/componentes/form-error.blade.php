@if ($errors ->has($campo))

	<div class="alert alert-danger">

		@foreach($errors->get($campo) as $e)

			<p>{{$e}}</p>

		@endforeach

	</div>

@endif