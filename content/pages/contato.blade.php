@extends('template.'.config('settings.template').'.content.master')
@section('title','Home')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Buscando os melhores Imóveis?</h1>
    <h2>São 20 anos de experiência de mercado</h2>
    <p>Entre em contato que estamos a </p>
<div class="form">
  <label for="formControlInput1" class="form-label">Nome </label>
  <input type="text" class="form-control" id="formControlInput1" placeholder="Nome completo">
</div>
<div class="form">
  <label for="formControlInput1" class="form-label">Telefone</label>
  <input type="text" class="form-control" id="formControlInput1" placeholder="Seu melhor numero">
</div>
<div class="form">
  <label for="formControlInput1" class="form-label">E-mail</label>
  <input type="email" class="form-control" id="formControlInput1" placeholder="Seu melhor e-mail">
</div>
<div class="form">
  <label for="formControlTextarea1" class="form-label">Descreva o tipo de imóvel que você procura</label>
  <textarea class="form-control" id="formControlTextarea1" rows="12"></textarea>
</div> 
</body>
</html>