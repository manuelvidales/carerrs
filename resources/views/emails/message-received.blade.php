<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Contacto') }}</title>
    <!-- Scripts -->
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
			<div class="alert alert-success">
			 <h4 class="alert-heading">Contenido de Mensaje!</h4>
			<p><strong>Recibiste un Mesaje de:</strong> {{$msg['name']}} - Correo: <strong>{{$msg['email']}}</strong></p>
			<p><strong>Celular:</strong> {{ $msg['mobile']}}</p>
			<p><strong>Telefono:</strong> {{ $msg['phone']}}</p>
			<hr>
			<p class="mb-0"><strong>Archivo:</strong> <a href="http://192.168.1.220:8082/storage/{{ $msg['resume']}}">Descargar Documento</a></p>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>
