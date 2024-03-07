@extends('layouts.app')

<style>

</style>

@section('content')

<div class="body">
    <section>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h1>{{ __('Inicio de Sesión') }}</h1>
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
            <div class="forget">
                <label for=""><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Recuérdame') }}</label>
            </div>
            <button class="boton" type="submit">{{ __('Iniciar Sesión') }}</button>
            <div class="register">
                <p>No tengo una cuenta <a href="{{ route('register') }}">Regístrate</a></p>
            </div>
        </form>
    </section>
</div>

@endsection