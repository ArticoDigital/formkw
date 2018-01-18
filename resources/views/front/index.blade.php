@extends('layout.general')
@section('content')
    <header class="form"></header>
    <main class="container container-form ">
        <h1>Volver a clases es cool con Thermos</h1>
        @if($errors->any())
            <div class="alert-error">
                <p>¡Tienes los siguientes errores!</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <p>¡Felicitaciones! los datos han sido enviados, pronto nos estaremos comunicando</p>
            <div><a href="{{route('home')}}" >Volver</a></div>
        @else

            <p>
                Ingresa tus datos y envía una imagen donde se lea claramente el número de la factura de tu compra con
                los 2 productos Thermos y te enviaremos una Botella de hidratación de 620ml Thermos
            </p>
            <p class="is-text-error">* Obligatario</p>

            <form action="{{route('formUpdate')}}" method="post" enctype="multipart/form-data">

                {{csrf_field()}}
                <div>
                    <label for="email">Dirección de correo electrónico <span class="is-text-error">*</span></label>
                    <input id="email" type="email" value="{{old('email')}}" name="email" required>
                </div>
                <div>
                    <label for="name">Nombres y apellidos <span class="is-text-error">*</span></label>
                    <input id="name" type="text" value="{{old('name')}}" name="name" required>
                </div>
                <div>
                    <label for="identification">cédula de ciudadanía <span class="is-text-error">*</span></label>
                    <input type="text" value="{{old('identification')}}" name="identification" id="identification"
                           required>
                </div>
                <div>
                    <label for="facebook">Usuario Facebook <span class="is-text-error">*</span></label>
                    <input type="text" value="{{old('facebook')}}" name="facebook" id="facebook" required>
                </div>
                <div>
                    <label for="address">Dirección <span class="is-text-error">*</span></label>
                    <input type="text" value="{{old('address')}}" name="address" id="address" required>
                </div>
                <div>
                    <label for="city">Ciudad <span class="is-text-error">*</span></label>
                    <input type="text" value="{{old('city')}}" name="city" id="city" required>
                </div>
                <div>
                    <label for="number_invoice">Número de factura <span class="is-text-error">*</span></label>
                    <input type="text" value="{{old('number_invoice')}}" name="number_invoice" id="number_invoice"
                           required>
                </div>
                <div>
                    <label for="">
                        imagen de factura <span class="is-text-error">*</span>
                        <input type="file" name="invoice" required>
                    </label>
                </div>
                <div class="row">
                    <a class="col-16 m-b-16" target="_blank" href="{{url('files/AUTORIZACIÓN_PARA_EL_TRATAMIENTO_DE_PROTECION_DE_DATOS_PERSONALES_KW.pdf')}}">Autorización tratamiento de proteccioón de datos personales</a>
                    <a class="col-16 m-b-16" target="_blank" href="{{url('files/POLÍTICA_DE_TRATAMIENTO_DE_PROTECCIÓN_DE_DATOS_PERSONALES_KW.pdf')}}">Pólitica tratamiento de protección de datos personales</a>
                    <a class="col-16 m-b-16" target="_blank" href="{{url('files/Reglamento_promoción_pague_2_lleve_3_thermos_final.pdf')}}">Reglamento promoción</a>
                </div>

                <div>
                    <input id="check" type="checkbox" value="1" {{old('check')?'checked':''}} name="check">
                    <label id="check" for="check">Acepta Términos y Condiciones</label>
                </div>
                {!! NoCaptcha::display() !!}
                <button class="is-full-width" type="submit">Enviar</button>

            </form>
        @endif
    </main>
@endsection
@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection