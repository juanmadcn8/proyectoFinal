@extends('home')
@extends('layouts.app')


@section('content')

<div class="container container-fluid">
    <br><br>
    <h3 class="text-center text-white">OPINIONES</h3>
    <br>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
        Añadir
    </button>
    @guest
    @if (Route::has('login'))
    @endif

    @if (Route::has('register'))
    @endif
    @else
    <button class="btn btn-danger">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Cerrar Sesión') }}
        </a>
    </button>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @endguest
    @foreach ($criticas as $index => $critica)
    <div class="container container-fluid d-flex justify-content-center">
        @if ($index % 2 == 0)
        <div class="container container-fluid d-flex justify-content-start">
            <div class="bocadillo-redondo izq d-flex justify-content-center align-items-center flex-column mt-5">
                @endif
                @if ($index % 2 != 0)
                <div class="container container-fluid d-flex justify-content-end">
                    <div class="bocadillo-redondo der d-flex justify-content-center align-items-center flex-column mt-5">
                        @endif
                        <div class="titulo">
                            <h4>{{$critica->nombrePelicula}}</h4>
                        </div>
                        <div class="comentario">{{$critica->comentario}}</div>
                        @if ($index % 2 == 0)
                        <div class="usuarioder">{{$critica->nombreUsuario}}</div>
                        @endif
                        @if ($index % 2 != 0)
                        <div class="usuarioizq">{{$critica->nombreUsuario}}</div>
                        @endif

                        <div class="btns">
                            <button type="button" class="btn btn-outline-warning me-2 mt-5" data-bs-toggle="modal" data-bs-target="#edit{{$critica->id}}">
                                Editar
                            </button><button type="button" class="btn btn-outline-danger mt-5" data-bs-toggle="modal" data-bs-target="#delete{{$critica->id}}">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @include("critica.info")
            @endforeach
            @include("critica.create")

        </div>
    </div>

    @endsection