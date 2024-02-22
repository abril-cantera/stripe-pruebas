@extends('layouts.app')

@section('content')
    <h1>Bienvenidos a la pagina para crear cursos</h1>
    <form >
        @csrf
        <label for="">
            Correo:
            <br>
            <input type="email" name="email">
        </label>
        <br>
        <div>
            <h4>Informacion de la tarjeta:</h4>
            <label for="">
                Numero de la tarjeta:
                <br>
                <input type="number" name="name">
            </label>
            <br>
            <label for="">
                Fecha de vencimiento:
                <br>
                <input type="number" name="name">
            </label>
            <br>
            <label for="">
                Codigo de seguridad:
                <br>
                <input type="number" name="name">
            </label>
        </div>
        <br>
        <label for="">
            Pais o region:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <button type="submit">Pagar</button>
    </form>
@endsection
