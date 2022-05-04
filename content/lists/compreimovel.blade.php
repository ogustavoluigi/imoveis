@extends('template.'.config('settings.template').'.content.master')
@section('content')
<ul>
    @foreach($contents as $content)
    <li>
        <h2 class="primery-bg-color">{{$content->title}}</h2>
        <img class="img-fluid rounded" src="{{$content->image}}" alt="{{$content->title}}">
        <br>
        <a href="{{route_content($content)}}">Saiba Mais</a>
    </li>
    @endforeach
</ul>
@stop