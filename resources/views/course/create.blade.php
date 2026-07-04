@extends('layouts.app')

@section('content')

<h1>formulario course</h1>

<form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero de curso:
    <br>
    <input type="number" name="course_number">
</label>
<br>
<br>

<label>
    Dia:
    <br>
    <input type="text" name="day">
</label>
<br>
<br>

<label for="area_id">Area</label>

    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione un area</option>

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