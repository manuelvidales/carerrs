@extends('layouts.custom')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header" style="text-align: center">Solicitud de empleo</div>
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
			     <input type="file" name="resume" class="custom-file-input" id="customFile">
			     <label class="custom-file-label" for="customFile">Ningun archivo selecionado</label>
				 </div>
			</div>
			<div>
			<label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
		</div>
			<div class="justify-content-end">
			<button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
			</div>
		</form>

<script>
// codigo para que aparezca el nombre del archivo selecionado
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</div>
</div>
</div>
</div>
</div>
@endsection