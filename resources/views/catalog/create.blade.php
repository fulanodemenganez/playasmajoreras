@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:20px">

<div class="col-md-offset-3 col-md-6">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">
      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
      Añadir nueva playa.
    </h3>
  </div>

  <div class="panel-body" style="padding:30px">

    {{-- TODO: Abrir el formulario e indicar el método POST --}}
      <form action="{{ url('pagina/que/recoge/el/form') }}" method="post" enctype="multipart/form-data" >
      {{-- TODO: Protección contra CSRF --}}
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" name="title" id="title" class="form-control">
      </div>

    <div class="form-group">
      <label>Imagen</label><br />
        {{-- TODO: Completa el input para la imagen --}}
        <label class="btn btn-primary" for="imagen">
            <input id="imagen" name="imagen" type="file" style="display:none;">
          Seleccionar archivo
        </label>
    </div>



    <div class="form-group">
        <label for="synopsis">Descripción</label>
          <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
      </div>

      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
          Añadir
        </button>
      </div>

    {{-- TODO: Cerrar formulario --}}
    </form>
  </div>
</div>
</div>
</div>

@stop
