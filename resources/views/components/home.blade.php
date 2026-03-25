@extends('layouts.app')

@section('title', 'Home | Pizza - Lenha&Brasa')

@section('content')
@php
    $heroImage = 'heroImage.avif'; // coloque em public/img e altere o nome aqui quando quiser
    $whatsAppUrl = 'https://wa.me'; // link padrao (troque se quiser)

    $pizzas = [
        [
            'name' => 'Calabresa',
            'image' => 'pizza-calabresa.jpg',
            'desc' => 'Molho artesanal, mussarela, calabresa fatiada e cebola roxa.',
            'tag' => 'Mais pedida',
        ],
        [
            'name' => 'Frango com Catupiry',
            'image' => 'pizza-frango-catupiry.jpg',
            'desc' => 'Frango desfiado temperado e catupiry cremoso finalizado no forno.',
            'tag' => 'Cremosa',
        ],
        [
            'name' => 'Quatro Queijos',
            'image' => 'pizza-queijo.jpeg',
            'desc' => 'Mussarela, parmesão, provolone e gorgonzola (equilíbrio perfeito).',
            'tag' => 'Intensa',
        ],
    ];
@endphp

<section class="hero" style="--hero-bg: url('{{ asset('img/' . $heroImage) }}')">
    <div class="hero__inner">
        <p class="hero__kicker">Massa de longa fermentação • Forno bem quente • Ingredientes frescos</p>
        <h1>A melhor pizza da cidade</h1>
        <p class="hero__sub">Peça em poucos cliques e receba quentinha na sua casa.</p>
        <div class="hero__actions">
            <a href="/promocao" class="btn">Ver promoções</a>
            <a href="/contato" class="btn btn--ghost">Falar com a gente</a>
        </div>
       
    </div>
</section>

<section class="section">
    <div class="section__head">
        <h2>Sabores mais pedidos</h2>
    </div>

    <div class="grid">
        @foreach ($pizzas as $pizza)
            <article class="card card--pizza">
                <div class="card__media">
                    <img
                        class="card__img"
                        src="{{ asset('img/' . $pizza['image']) }}"
                        alt="Pizza {{ $pizza['name'] }}"
                        loading="lazy"
                    />
                    <span class="badge">{{ $pizza['tag'] }}</span>
                </div>
                <div class="card__body">
                    <h3 class="card__title">Pizza {{ $pizza['name'] }}</h3>
                    <p class="card__text">{{ $pizza['desc'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="cta">
    <div class="cta__inner">
        <h2>Bateu a fome?</h2>
        <p>Peça agora mesmo pelo WhatsApp e acompanhe seu pedido.</p>
        <a id="btn-pedir-agora" href="{{ $whatsAppUrl }}" class="btn" target="_blank" rel="noopener noreferrer">Pedir agora</a>
      
    </div>
</section>

<script type="text/javascript">
window.onload = function () {
  (function (d, script) {
    script = d.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = 'https://w.app/widget-v1/tmakz2.js';
    d.getElementsByTagName('head')[0].appendChild(script);
  })(document);

  // Sincroniza o botao "Pedir agora" com o mesmo destino do icone/widget do WhatsApp.
  setTimeout(function () {
    var btn = document.getElementById('btn-pedir-agora');
    if (!btn) return;

    var whatsappAnchors = document.querySelectorAll('a[href*="wa.me"], a[href*="api.whatsapp"], a[href*="whatsapp.com"]');
    for (var i = 0; i < whatsappAnchors.length; i++) {
      var link = whatsappAnchors[i];
      if (link.id === 'btn-pedir-agora') continue;
      if (link.href) {
        btn.href = link.href;
        break;
      }
    }
  }, 1200);
};
</script>
@endsection