@extends('layouts.master')

@section('content')

    Pantalla principal del cat&aacute;logo<br/>

<div class="row">

    @foreach( $capas as $capa )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/catalog/show/' . $capa->id ) }}">
            <img src="/playasmajoreras/public/{{$capa->imagen}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$capa->nombre}}
            </h4>
        </a>

    </div>
    @endforeach

</div>

@stop