<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>presolicitud</title>
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:700&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
<br>

<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">

  <center><h2>Envianos tu Pre-solicitud de Empleo</h2>
  <p style="color:blue">Seleciona un Perfil y llena los campos</p></center>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills justify-content-center" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"><strong>TRANSFER/B1</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1"><strong>FORANEO</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2"><strong>MOV. LOCALES</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu3"><strong>CORTO - FORANEO</strong></a>
    </li>
  </ul>
  <br>
<!-- Alertas -->
@if (session('info'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-2">
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
            <div class="col-md-10 col-md-offset-2">
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
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header" style="text-align: center"><h2>5TA. RUEDA - TRANFER / B1</h2></div>
                <div class="card-body">

        <form method="POST" action="{{ route('applicants') }}" enctype="multipart/form-data" file="true">
            @csrf
            <div class="form-group">
            <input type="hidden" name="opcion" class="form-control" value="1">
            <input type="hidden" name="perfil" class="form-control" value="OPERADOR 5TA RUEDA - TRANSFER / B1">
            </div>

            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre(s) y Apellido(s) *" value="{{old('name')}}">
            <label style="color:red">{!! $errors->first('name', '<small>:message</small><br>') !!}</label>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email *" value="{{old('email')}}">
            <label style="color:red">{!! $errors->first('email', '<small>:message</small><br>') !!}</label>
            </div>  
            <div class="form-group">
            <div class="row justify-content-center">
            <div class="col">
                    <input type="text" name="mobile" class="form-control" placeholder="Telefono Celular *" value="{{old('mobile')}}">
                    <label style="color:red">{!! $errors->first('mobile', '<small>:message</small><br>') !!}</label>
            </div>        
            <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Telefono de casa" value="{{old('phone')}}">
                    <label style="color:red">{!! $errors->first('phone', '<small>:message</small><br>') !!}</label>
            </div>
            </div></div>  

<div class="form-group">
<div class="row justify-content-center">
    <div class="col">
  <label class="form-check-label" for="visa">¿CUENTA CON VISA LASER? *</label>
    <div class="form-check">
      <label class="form-check-label" for="visa">
        <input type="radio" class="form-check-input" id="visa" name="visa" value="SI">SI
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="visa">
        <input type="radio" class="form-check-input" id="visa" name="visa" value="NO">NO
      </label><br>
    <label style="color:red">{!! $errors->first('visa', '<small>:message</small><br>') !!}</label>
    </div>
    </div>
    <div class="col">
    <label class="form-check-label" for="licencia">¿CUENTA CON LICENCIA FEDERAL? *</label>
        <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="SI">SI
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="NO">NO
      </label><br>
    <label style="color:red">{!! $errors->first('licfed', '<small>:message</small><br>') !!}</label>
    </div>

    </div>
</div>
</div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Archivo</span>
                </div>
                <div class="custom-file">
                 <input type="file" name="resume" class="custom-file-input" id="customFile">
                 <label class="custom-file-label" for="customFile">Opcional: puede anexar su curriculum</label>
                 </div>
            </div>
            <div>
            <label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
            </div>
            <div class="form-group">(*)Los campos son requeridos</div>
            <div class="justify-content-end">
            <button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
            </div>
        </form>

</div>
</div>
</div>
</div>
<br>

    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header" style="text-align: center"><h2>5TA. RUEDA - FORANEO</h2></div>
                <div class="card-body">

        <form method="POST" action="{{ route('applicants') }}" enctype="multipart/form-data" file="true">
            @csrf
            <div class="form-group">
            <input type="hidden" name="opcion" class="form-control" value="2">
            <input type="hidden" name="perfil" class="form-control" value="OPERADOR 5TA RUEDA - FORANEO">
            </div>

            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre(s) y Apellido(s) *" value="{{old('name')}}">
            <label style="color:red">{!! $errors->first('name', '<small>:message</small><br>') !!}</label>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email *" value="{{old('email')}}">
            <label style="color:red">{!! $errors->first('email', '<small>:message</small><br>') !!}</label>
            </div>  
            <div class="form-group">
            <div class="row justify-content-center">
            <div class="col">
                    <input type="text" name="mobile" class="form-control" placeholder="Telefono Celular *" value="{{old('mobile')}}">
                    <label style="color:red">{!! $errors->first('mobile', '<small>:message</small><br>') !!}</label>
            </div>        
            <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Telefono de casa" value="{{old('phone')}}">
                    <label style="color:red">{!! $errors->first('phone', '<small>:message</small><br>') !!}</label>
            </div>
            </div></div>  

<div class="form-group">
<div class="row justify-content-center">
    <div class="col">
    <label class="form-check-label" for="licencia">¿CUENTA CON LICENCIA FEDERAL? *</label>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="SI">SI
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="NO">NO
      </label><br>
    <label style="color:red">{!! $errors->first('licfed', '<small>:message</small><br>') !!}</label>
    </div>
    </div>
</div>
</div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Archivo</span>
                </div>
                <div class="custom-file">
                 <input type="file" name="resume" class="custom-file-input" id="customFile">
                 <label class="custom-file-label" for="customFile">Opcional: puede anexar su curriculum</label>
                 </div>
            </div>
            <div>
            <label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
        </div>
        <div class="form-group">(*)Los campos son requeridos</div>
            <div class="justify-content-end">
            <button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
            </div>
        </form>

</div>
</div>
</div>
</div>
<br>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header" style="text-align: center"><h2>5TA. RUEDA - MOVIMIENTOS LOCALES</h2></div>
                <div class="card-body">

        <form method="POST" action="{{ route('applicants') }}" enctype="multipart/form-data" file="true">
            @csrf
            <div class="form-group">
            <input type="hidden" name="opcion" class="form-control" value="2">
            <input type="hidden" name="perfil" class="form-control" value="OPERADOR 5TA RUEDA - MOV. LOCALES">
            </div>

            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre(s) y Apellido(s) *" value="{{old('name')}}">
            <label style="color:red">{!! $errors->first('name', '<small>:message</small><br>') !!}</label>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email *" value="{{old('email')}}">
            <label style="color:red">{!! $errors->first('email', '<small>:message</small><br>') !!}</label>
            </div>  
            <div class="form-group">
            <div class="row justify-content-center">
            <div class="col">
                    <input type="text" name="mobile" class="form-control" placeholder="Telefono Celular *" value="{{old('mobile')}}">
                    <label style="color:red">{!! $errors->first('mobile', '<small>:message</small><br>') !!}</label>
            </div>        
            <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Telefono de casa" value="{{old('phone')}}">
                    <label style="color:red">{!! $errors->first('phone', '<small>:message</small><br>') !!}</label>
            </div>
            </div></div>  
<div class="form-group">
<div class="row justify-content-center">
    <div class="col">
    <label class="form-check-label" for="licencia">¿CUENTA CON LICENCIA FEDERAL? *</label>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="SI">SI
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="NO">NO
      </label><br>
    <label style="color:red">{!! $errors->first('licfed', '<small>:message</small><br>') !!}</label>
    </div>
    </div>
</div>
</div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Archivo</span>
                </div>
                <div class="custom-file">
                 <input type="file" name="resume" class="custom-file-input" id="customFile">
                 <label class="custom-file-label" for="customFile">Opcional: puede anexar su curriculum</label>
                 </div>
            </div>
            <div>
            <label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
        </div>
        <div class="form-group">(*)Los campos son requeridos</div>
            <div class="justify-content-end">
            <button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
            </div>
        </form>

</div>
</div>
</div>
</div>
<br>

    </div>
    <div id="menu3" class="container tab-pane fade"><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header" style="text-align: center"><h2>CAMION CORTO - FORANEO</h2></div>
                <div class="card-body">

        <form method="POST" action="{{ route('applicants') }}" enctype="multipart/form-data" file="true">
            @csrf

            <div class="form-group">
            <input type="hidden" name="opcion" class="form-control" value="2">
            <input type="hidden" name="perfil" class="form-control" value="OPERADOR CORTO - FORANEO">
            </div>

            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre(s) y Apellido(s) *" value="{{old('name')}}">
            <label style="color:red">{!! $errors->first('name', '<small>:message</small><br>') !!}</label>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email *" value="{{old('email')}}">
            <label style="color:red">{!! $errors->first('email', '<small>:message</small><br>') !!}</label>
            </div>  
            <div class="form-group">
            <div class="row justify-content-center">
            <div class="col">
                    <input type="text" name="mobile" class="form-control" placeholder="Telefono Celular *" value="{{old('mobile')}}">
                    <label style="color:red">{!! $errors->first('mobile', '<small>:message</small><br>') !!}</label>
            </div>        
            <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Telefono de casa" value="{{old('phone')}}">
                    <label style="color:red">{!! $errors->first('phone', '<small>:message</small><br>') !!}</label>
            </div>
            </div></div>  

<div class="form-group">
<div class="row justify-content-center">
    <div class="col">
    <label class="form-check-label" for="licencia">¿CUENTA CON LICENCIA FEDERAL? *</label>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="SI">SI
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="licencia">
        <input type="radio" class="form-check-input" id="licencia" name="licfed" value="NO">NO
      </label><br>
    <label style="color:red">{!! $errors->first('licfed', '<small>:message</small><br>') !!}</label>
    </div>
    </div>
</div>
</div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Archivo</span>
                </div>
                <div class="custom-file">
                 <input type="file" name="resume" class="custom-file-input" id="customFile">
                 <label class="custom-file-label" for="customFile">Opcional: puede anexar su curriculum</label>
                 </div>
            </div>
            <div>
            <label style="color:red">{!! $errors->first('resume', '<small>:message</small><br>') !!}</label>
        </div>
        <div class="form-group">(*)Los campos son requeridos</div>
            <div class="justify-content-end">
            <button type="submit" class="btn btn-success btn-lg btn-block"> <strong>Enviar</strong> </button>
            </div>
        </form>

</div>
</div>
</div>
</div>
<br>
    </div>


<script>
// codigo para que aparezca el nombre del archivo selecionado
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</div>
<!-- Tab panes -->

</div>
</div>
</div>
    </body>
</html>
