@extends('layouts.app')

@section('title', 'Promoções | Pizza - Lenha&Brasa')

@section('content')
@php
    $deals = [
        [
            'title' => 'Combo Calabresa',
            'desc' => '2 pizzas de calabresa por um preço especial.',
            'price' => 'R$ 59,90',
            'note' => 'Válido em tamanhos selecionados.',
        ],
        [
            'title' => 'Frango + Refri',
            'desc' => 'Frango com catupiry com refrigerante grátis.',
            'price' => 'Confira no balcão',
            'note' => 'Sujeito à disponibilidade.',
        ],
        [
            'title' => 'Terça da Família',
            'desc' => 'Pizza grande + borda recheada com desconto.',
            'price' => 'R$ 79,90',
            'note' => 'Somente às terças.',
        ],
    ];
@endphp

<section class="page">
    <div class="page-banner page-banner--promo">
        <p class="page-banner__kicker">Ofertas atualizadas da semana</p>
        <h1>Promoções</h1>
        <p class="page__sub">Aproveite combos e descontos do dia. Atualizamos sempre que dá.</p>
    </div>

    <div class="stats-row">
        <div class="stat-pill"><strong>3</strong> combos ativos</div>
        <div class="stat-pill"><strong>30-45 min</strong> tempo médio</div>
        <div class="stat-pill"><strong>Até 23h</strong> atendimento</div>
    </div>

    <div class="page__head">
        <h1>Promoções</h1>
        <p class="page__sub">Escolha seu combo favorito e finalize pelo WhatsApp em poucos cliques.</p>
    </div>

    <div class="grid">
        @foreach ($deals as $deal)
            <article class="card card--deal">
                <div class="card__body">
                    <span class="chip">Oferta especial</span>
                    <h2 class="card__title">{{ $deal['title'] }}</h2>
                    <p class="card__text">{{ $deal['desc'] }}</p>
                    <p class="price">{{ $deal['price'] }}</p>
                    <p class="muted">{{ $deal['note'] }}</p>
                </div>
            </article>
        @endforeach
    </div>

    <div class="callout">
        <h2>Quer um desconto no primeiro pedido?</h2>
        <p>Fale com a gente no WhatsApp e peça o cupom do dia.</p>
        <div class="actions-inline">
            <a class="btn" href="/contato">Ver contato</a>
            <a class="btn btn--ghost" href="/home">Voltar para home</a>
        </div>
    </div>
</section>
@endsection