@extends('template.'.config('settings.template').'.content.master')
@section ('title','WEB IMÓVEIS')
@section('content')
<div class="container" id="mini-banners">
    <div class="row justify-content-around">
        <div class="col-12 primery-bg-color" id="mini-banner-1">
            <h2 class="primery-bg-color">Casa de Campo</h2>
            <img src="{{ storage('images/casa_de_campo.jpg')}}" alt="casadecampo">
            <br>
            <a href="#">Saiba Mais</a>
            <br>
            <img src="{{ storage('images/cdc2.jpg')}}" alt="casadecampo1">
            <br>
            <a href="#">Saiba Mais</a>
            <br>
            <img src="{{ storage('images/cdc3.jpg')}}" alt="casadecampo2">
            <br>
            <a href="#">Saiba Mais</a>
            <br>
            <img src="{{ storage('images/cdc4.jpg')}}" alt="casadecampo3">
            <br>
            <a href="#">Saiba Mais</a>
            <div class="col-12 primery-bg-color" id="mini-banner-3">
                <h2 class="primery-bg-color">Casa de Praia</h2>
                <img src="{{ storage('images/casa_de_praia.jpg')}}" alt="casadepraia">
                <br>
                <a href="#">Saiba Mais</a>
                <br>
                <img src="{{ storage('images/cdp2.jpg')}}" alt="casadepraia">
                <br>
                <a href="#">Saiba Mais</a>
                <br>
                <img src="{{ storage('images/cdp3.jpg')}}" alt="casadepraia">
                <br>
                <a href="#">Saiba Mais</a>
                <br>
                <img src="{{ storage('images/cdp4.jpg')}}" alt="casadepraia">
                <br>
                <a href="#">Saiba Mais</a>
                <div class="col-12 primery-bg-color" id="mini-banner-3">
                    <h2 class="primery-bg-color">Casa na Cidade</h2>
                    <img src="{{ storage('images/casa_de_cidade.jpg')}}" alt="casadecidade">
                    <br>
                    <a href="#">Saiba Mais</a>
                    <br>
                    <img src="{{ storage('images/casadecidad2.jpg')}}" alt="casadecidade">
                    <br>
                    <a href="#">Saiba Mais</a>
                    <br>
                    <img src="{{ storage('images/casadecidad3.jpg')}}" alt="casadecidade">
                    <br>
                    <a href="#">Saiba Mais</a>
                    <br>
                    <img src="{{ storage('images/casadecid4.jpg')}}" alt="casadecidade">
                    <br>
                    <a href="#">Saiba Mais</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<p>Como foi pensado a Web Imóveis, em um unico lugar, você tem as opções de imóveis anunciados em diversas
    plataformas de venda, assim como o seu anuncio também.
<p>
<p>Um lugar para sua venda e sua compra de Imóveis na web
<p>
<p>Viva a experiencia de conhecer as opçções de compra e venda em um unico portal
<p>

    @stop