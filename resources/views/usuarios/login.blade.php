@extends('plantillas.encabezadologin')
@section('cuerpologin')
    <form action="@me" method="post">
        @csrf
        <a><img src="imagenes/loginimage.png"></a>

        <div>
            <span class="material-symbols-rounded">person</span>
            <input type="text" placeholder="Usuario">
        </div>
        <div>
            <span class="material-symbols-rounded">lock</span>
            <input type="password" placeholder="Contraseña">
        </div>

        <input type="submit">
    </form>
@endsection
