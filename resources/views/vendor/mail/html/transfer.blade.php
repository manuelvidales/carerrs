@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header')
Pre-solicitud de Empleo Online
@endcomponent
@endslot

{{-- Subtitle --}}
@slot('subtitle')
@component('mail::subtitle')
Fecha: {{ date('d-m-Y H:i') }}  
@endcomponent
@endslot

{{-- Panel --}}
@component('mail::panel')
{{$msg['perfil']}}
@endcomponent

    {{-- Body --}}

Nombre: **{{$msg['name']}}**  

Correo: **{{$msg['email']}}**  

Celular: **{{$msg['mobile']}}**  

Telefono: **{{$msg['phone']}}**  

___Cuenta con:___
* Visa Laser:  {{$msg['visa']}}
* Licencia Federal: {{$msg['licfed']}}

---

@if ($msg['resume'] == 'null')
 ***No se anexaron documentos***
@else
 **[Descargar documento](http://localhost:8000/jobs/public/storage/{{$msg['resume']}})**   
@endif

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{-- subcopy --}}

            @endcomponent
        @endslot
    @endisset


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Autofletes Internacionales Halcon. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
