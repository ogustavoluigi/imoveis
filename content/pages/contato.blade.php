@extends('template.'.config('settings.template').'.content.master')
@section('title','Contato')
@section('content')
<h2>Buscando os melhores Imóveis?</h2>
<h3>São 20 anos de experiência de mercado</h3>
<p>Entre em contato que temos uma equipe espcializada em melhores neg</p>
<form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
@stop
