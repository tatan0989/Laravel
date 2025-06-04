@extends('layouts.plantilla')
@section('title', 'Cursos create')
@section('content')
<h1>En esta pagina podras crear un curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:<br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
    <br>
    <samp>*{{$message}}</samp>
    <br>  
    @enderror

    <br>
    <label>
        Descripcion:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label>

    <br>
     @error('descripcion')
    <br>
    <samp>*{{$message}}</samp>
    <br>  
    @enderror

    <label>
        Categoria:<br>
        <input type="text" name="categoria"value="{{old('categoria')}}">
    </label>

     @error('categoria')
    <br>
    <samp>*{{$message}}</samp>
    <br>  
    @enderror

    <br>
    <button type="submit">Enviar formulario</button>

</form>
@endsection
    



