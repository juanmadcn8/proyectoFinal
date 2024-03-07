@extends('layouts.app')


@section('content')
<div class="body">
    <section>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <h1>{{ __('Registrarse') }}</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="">{{ __('Nombre') }}</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="">{{ __('Dirección de Correo Electrónico') }}</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed outline"></ion-icon>
                <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="">{{ __('Contraseña') }}</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed outline"></ion-icon>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                <label for="">{{ __('Repite la contraseña') }}</label>
            </div>
            <button class="boton" type="submit">{{ __('Registrarse') }}</button>
            <div class="register">
                <p>Ya tengo una cuenta <a href="{{ route('login') }}">Iniciar sesión</a></p>
            </div>
        </form>
    </section>
</div>


@endsection