@extends('layouts.app')

@section('title', 'Contato | Pizza - Lenha&Brasa')

@section('content')
<section class="page">
    <div class="page-banner page-banner--contact">
        <p class="page-banner__kicker">Estamos prontos para atender</p>
        <h1>Contato</h1>
        <p class="page__sub">Faça seu pedido, tire dúvidas e acompanhe promoções.</p>
    </div>

    <div class="stats-row">
        <div class="stat-pill"><strong>WhatsApp</strong> resposta rápida</div>
        <div class="stat-pill"><strong>Retirada</strong> no balcão</div>
        <div class="stat-pill"><strong>Entrega</strong> em bairros próximos</div>
    </div>

    <div class="page__head">
        <h1>Contato</h1>
        <p class="page__sub">Faça seu pedido, tire dúvidas e acompanhe promoções.</p>
    </div>

    <div class="info-grid">
        <article class="info">
            <h2>WhatsApp</h2>
            <p class="big">(11) 99999-9999</p>
            <p class="muted">Atendimento: Ter–Dom • 18h–23h</p>
            <a class="btn" href="https://wa.me" target="_blank" rel="noopener noreferrer">Chamar no WhatsApp</a>
        </article>

        <article class="info">
            <h2>Endereço</h2>
            <p class="big">Av. Antônio Munhoz Bonilha, 925 - Vila Palmeiras, São Paulo - SP, 02725-000</p>
            <p class="muted">Retirada no balcão disponível</p>
        </article>

        <article class="info">
            <h2>Entrega</h2>
            <p>Entregamos em bairros próximos (consulte taxa e tempo médio).</p>
            <a class="btn btn--ghost" href="/promocao">Ver promoções</a>
        </article>
    </div>

    <div class="callout">
        <h2>Atendimento para eventos</h2>
        <p>Também montamos combos para aniversários e confraternizações. Consulte condições no WhatsApp.</p>
    </div>
</section>
@endsection