@extends('layouts.custom')
@if (session('info'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success" role="alert">
                    <strong>Aviso:</strong> {{ session('info') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@elseif (session('error'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger" role="alert">
                    <strong>Aviso:</strong> {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header">Solicitud de empleo</div>
				<div class="card-body">

		<form method="POST" action="{{ route('applicants') }}" enctype="multipart/form-data" file="true">
			@csrf
			<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Nombre y Apellido(s)" value="{{old('name')}}">
			<label style="color:red">{!! $errors->first('name', '<small>:message</small><br>') !!}</label>
			</div>
			<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
			<label style="color:red">{!! $errors->first('email', '<small>:message</small><br>') !!}</label>
			</div>  
			<div class="form-group">
			<input type="text" name="mobile" class="form-control" placeholder="Telefono Celular" value="{{old('mobile')}}">
			<label style="color:red">{!! $errors->first('mobile', '<small>:message</small><br>') !!}</label>
			</div>
			<div class="form-group">
			<input type="text" name="phone" class="form-control" placeholder="Telefono de casa" value="{{old('phone')}}">
			<label style="color:red">{!! $errors->first('phone', '<small>:message</small><br>') !!}</label>
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" name="resume" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo</label>
			  </div>
			  <label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
			</div>

			<br>
			<div class="justify-content-end">

				<button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
			</div>
		</form>

</div>
</div>
</div>
</div>
</div>
