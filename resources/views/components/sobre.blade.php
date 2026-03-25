@extends('layouts.app')

@section('title', 'Sobre | Pizza - Lenha&Brasa')

@section('content')
<section class="page">
    <div class="page-banner page-banner--about">
        <p class="page-banner__kicker">Nossa história e propósito</p>
        <h1>Sobre nós</h1>
        <p class="page__sub">
            Tradição de pizzaria com pegada moderna: sabor intenso, visual caprichado e atendimento rápido.
        </p>
    </div>

    <div class="stats-row">
        <div class="stat-pill"><strong>+12</strong> sabores autorais</div>
        <div class="stat-pill"><strong>100%</strong> forno no ponto</div>
        <div class="stat-pill"><strong>Ter-Dom</strong> 18h às 23h</div>
    </div>

    <div class="page__head">
        <h1>Sobre nós</h1>
        <p class="page__sub">
            A <strong>Pizza - Lenha&Brasa</strong> nasceu da vontade de fazer pizza com sabor de verdade:
            massa bem trabalhada, molho com tomate de qualidade e forno sempre no ponto.
        </p>
    </div>

    <div class="info-grid">
        <article class="info">
            <h2>Nosso jeito de fazer</h2>
            <ul class="list">
                <li>Massa de longa fermentação para ficar leve e crocante.</li>
                <li>Molho artesanal e ingredientes selecionados.</li>
                <li>Assadas no calor alto para derreter e dourar na medida.</li>
            </ul>
        </article>

        <article class="info">
            <h2>Qualidade e cuidado</h2>
            <p>
                A gente prioriza consistência: cada pizza sai padronizada, bem montada e com ótimo acabamento.
                Se você tiver qualquer problema com seu pedido, resolvemos rápido.
            </p>
        </article>

        <article class="info">
            <h2>Horários</h2>
            <p><strong>Ter–Dom:</strong> 18h às 23h</p>
            <p><strong>Entrega:</strong> região central e bairros próximos</p>
        </article>
    </div>

    <div class="callout">
        <h2>Quer conhecer os sabores mais pedidos?</h2>
        <p>Acesse a home e veja os cards com fotos e detalhes de cada pizza.</p>
        <a class="btn" href="/home">Ver cardápio da home</a>
    </div>
</section>
@endsection