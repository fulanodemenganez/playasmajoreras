@extends('layouts.master')

@section('content')

   

    <div class="row">

    <div class="col-sm-4">


	<img src="/playasmajoreras/public/{{$capa->imagen}}" style="width:380px"/>

    </div>
    <div class="col-sm-8">

        {{-- Datos de la playa --}}

        <h2>{{$capa->nombre}}</h2>
        <p>{{$capa->descripcion}}</p>
        <br />
        {{-- Colocamos los botones de edicion y volver --}}
        <a href="{{url('/catalog/edit/'.$capa->id)}}" class= "btn btn-success"> Editar </a>&nbsp;
        <a href="{{ url('/catalog')}}" class= "btn btn-default"> Volver </a>

    </div>
</div>


@stop
