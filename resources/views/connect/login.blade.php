@extends('connect.master')

@section('title','Login')

@section('content')

	<div class="box box_login shadow">
		<div class="header">
			<a href="{{ url('') }}">
				<img src="{{ url('/static/images/logo.png') }}" alt="">
			</a>
		</div>
		<div class="inside">
		{!! Form::open(['url' => '/login']) !!}
		
		<label for="email" class="mtop16">Correo electrónico</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
			</div>
			{!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Escriba su Correo Electronico']) !!}
		</div>

		<label for="password" class="mtop16">Contraseña</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-lock"></i></div>
			</div>
			{!! Form::password('password', ['class' => 'form-control','placeholder' => 'Escriba su Contraseña']) !!}
		</div>


		{!! Form::submit('Iniciar', ['class' => 'btn btn-success mtop16']) !!}
		{!! Form::close() !!}

		@if(Session::has('message'))
			<div class="container">
				<div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display: none;">
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

		<div class="footer mtop16">
			
			<a href="{{url('/register')}}">No tienes cuenta?, Registrate</a>
			<a href="{{url('/recover')}}">Olvidaste tu contraseña?</a>

		</div>

		</div>

	</div>

@stop