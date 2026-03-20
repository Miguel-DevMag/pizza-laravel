<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pizza Suprema</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('components.header')

<!-- HERO -->
<section class="hero">
    <h1>A Melhor Pizza da Cidade 🍕</h1>
    <p>Feita com ingredientes frescos e muito sabor</p>
    <a href="/promocao" class="btn">Ver Promoções</a>
</section>

<!-- DESTAQUES -->
<section class="destaques">
    <h2>🍕 Sabores Mais Pedidos</h2>

    <div class="grid">
        <div class="card">
            <h3>Pizza Calabresa</h3>
            <p>Clássica e irresistível</p>
        </div>

        <div class="card"> 
            <h3>Pizza Frango com Catupiry</h3>
            <p>Cremosa e deliciosa</p>
        </div>

        <div class="card">
            <h3>Pizza Quatro Queijos</h3>
            <p>Para quem ama queijo</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Bateu a fome?</h2>
    <p>Peça agora mesmo pelo WhatsApp</p>
   <a href="https://wa.me" onclick="carregarWidget()" class="btn">📲 Pedir Agora</a>

</section>

<script type="text/javascript">
              window.onload = function(){
              (function(d, script) {
              script = d.createElement('script');
              script.type = 'text/javascript';
              script.async = true;
              script.src = 'https://w.app/widget-v1/tmakz2.js';
              d.getElementsByTagName('head')[0].appendChild(script);
              }(document));
              };
              </script>

</body>
</html>