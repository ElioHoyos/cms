<!DOCTYPE html>
<html>
<head>
	<title>tienda - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{url('/static/css/connect.css?v='.time())}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/8d3844fec4.js" crossorigin="anonymous"></script>

</head>
<body>

	@if(Session::has('message'))

		<div class="container">
			
			<div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
				{{ Session::get('message') }}
				@if($errors->any())
					<ul>
						
						@foreach($errors->all() as $error)

						<li>{{ $error }}</li>

						@endforeach

					</ul>
				@endif

				<script>
					
					$('.alert').slideDown();
					setTimeout(function(){ $('.alert').slideUp();}, 10000);

				</script>

			</div>

		</div>

	@endif

	@section('content')
	@show

</body>
</html>