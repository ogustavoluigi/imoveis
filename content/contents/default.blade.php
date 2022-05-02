@extends('template.'.config('settings.template').'.content.master')
@section('content')
<h1>{{$content->title}}</h1>
<p>{!!$content->data_fields['descricao_do_imovel']!!}</p>
<img src="{{$content->image}}" alt="">
@stop   