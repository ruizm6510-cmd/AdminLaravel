@extends('layouts.app')

@section('content')

<h1>formulario area</h1>

<form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">

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

<label for="course_id">Area</label>

    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione un profesor</option>

        @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>
<br>
<br>

<label for="training_center_id">TrainingCenter</label>

    <select name="training_center_id" id="training_center_id" class="form-control">
        <option value="">Seleccione un centro</option>

        @foreach($centers as $center)
            <option value="{{ $center->id }}">
                {{ $center->name }}
            </option>
        @endforeach
    </select>
<br>
<br>

<button type="submit">Enviar Formulario:</button>
</form>

@endsection

