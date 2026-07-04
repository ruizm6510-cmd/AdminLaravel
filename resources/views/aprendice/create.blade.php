@extends('layouts.app')

@section('content')

<h1>formulario area</h1>

<form action="{{route('aprendice.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>

<label>
    Email:
    <br>
    <input type="email" name="email">
</label>
<br>
<br>

<label>
    Numero de cecular:
    <br>
    <input type="number" name="cell_number">
</label>
<br>
<br>

<label for="course_id">Course</label>

    <select name="course_id" id="course_id" class="form-control">
        <option value="">Seleccione un curso</option>

        @foreach($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->course_number }}
            </option>
        @endforeach
    </select>
<br>
<br>

<label for="course_id">Computer</label>

    <select name="computer_id" id="computer_id" class="form-control">
        <option value="">Seleccione un computador</option>

        @foreach($computers as $computer)
            <option value="{{ $computer->id }}">
                {{ $computer->number }}
            </option>
        @endforeach
    </select>
<br>
<br>



<button type="submit">Enviar Formulario:</button>
</form>

@endsection