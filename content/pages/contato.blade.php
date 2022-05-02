@extends('template.'.config('settings.template').'.content.master')
@section('title','Contato')
@section('content')
<h4>Buscando as melhores ofertas de Imóveis?</h4>
<p>Contamos com uma equipe especializada em negócios Imobiliários</p>
<form action="#" method="POST">
    <div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><br>Nome<br></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Completo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><br>Email<br></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Seu melhor e-mail">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><br>Telefone<br></label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Seu melhor numero">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><br>Nos conte mais sobre o tipo de
                imóvel que
                procura:<br></label>
        </div>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
        <div class="button">
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>
@stop