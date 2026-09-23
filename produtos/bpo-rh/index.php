<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9104300888338039"
     crossorigin="anonymous"></script>
     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="../../view/src/layout/bpo-rh.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- SEO -->
    <link rel="shortcut icon" href="../../view/img/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta property="publisher" content="Inspira Capital">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:region" content="Brasil">
    <meta property="og:author" content="Inspira Capital">
    <meta property="og:site_name" content="Inspira Capital">
    <meta name="twitter:card" content="summary_large_image">   

    <!-- Link da página acessada -->
    <link rel="canonical" href="https://inspiracapital.com.br/produtos/bpo-rh/">
    <meta property="og:url" content="https://inspiracapital.com.br/produtos/bpo-rh/">

    <!-- Title -->
    <title>Inspira Capital - BPO RH</title>
    <meta property="og:title" content="Inspira Capital - BPO RH">
    <meta name="twitter:title" content="Inspira Capital - BPO RH">

    <!-- Description -->
    <meta name="description" content="">
    <meta property="og:description" content="">
    <meta name="twitter:description" content="">

    <!-- Link da imagem do banner do produto -->
    <meta property="og:image" content="https://inspiracapital.com.br/view/img/background-main/bporh.png">
    <meta name="twitter:image" content="https://inspiracapital.com.br/view/img/background-main/bporh.png">
    <meta name="thumbnail" content="https://inspiracapital.com.br/view/img/background-main/bporh.png">

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];w[l].push({
            'gtm.start':new Date().getTime(),event:'gtm.js'
            });
            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(
            window,
            document,
            'script',
            'dataLayer',
            'GTM-54CSTNW'
            );
    </script>
    <!-- End Google Tag Manager -->

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54CSTNW"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Main -->
    <section class="inicio">
        <div class="gradient">
                <div class="container">
                        <img class="logo-main" src="../../view/img/logo/bpo-rh.png">
                        <h1>O seu RH terceirizado, de maneira simples.</h1>
                        <p class="i-info">NPS de 97.4%</p>
                </div>
        </div>
        <a id="arrow-down" href="#footer-inspira"> 
            <img src="../../view/img/icones/arrow-down-sign-to-navigate.png" alt="arrow-down" id="arrow-down-icon">
        </a>   
    </section>

        <!-- PARCEIROS -->
        <?php include '../../view/web-components/scroll-clients/scroll-clients.php';?>


    <!-- Apresentação -->
    <section class="apresentacao">
        <div class="a-content">
            <p class="a-info">Entendemos que cuidar dos colaboradores é essencial para o sucesso de qualquer organização e muitas vezes ferramentas e metodologias custam muito dinheiro e tempo para serem adotadas internamente.</p>
            <p class="a-info">Diante disto, ajudamos nossos clientes realizando ações essenciais em RH estratégico que conectem os colaboradores ao propósito da empresa, melhorando a produtividade através do engajamento, pertencimento e dados.</p>
            <button class="b-secundary" onclick="send()">Fale com um especialista!</button>
        </div>
        <img src="img/homem-mulher.png" alt="imagem-recrutamento" class="a-img">
    </section>

    <!-- Entrega -->
    <section class="entrega">
        <h2 class="e-title">O que entregamos?</h2>
        <div class="card">
            <div class="e-content">
                <p class="e-info">Suporte a diretoria</p>
                <p class="e-info">Redução de custos & aumento de efetividade</p>
                <p class="e-info">Recrutamento e seleção sob demanda</p>
                <button class="b-secundary" onclick="send()">Fale com um especialista!</button>
            </div>
            <img src="img/retrato-de-mulher-trabalhadora-de-atendimento-ao-cliente 1.png" alt="imagem-recrutamento" class="e-img">
        </div>
        <div class="card" id="c-reverse">
            <div class="e-content" id="e-content-reverse">
                <p class="e-info">Pesquisa de clima e engajamento dos colaboradores</p>
                <p class="e-info">+ eficiência e - custo</p>
                <p class="e-info">12 meses de contrato</p>
                <button class="b-secundary" onclick="send()">Fale com um especialista!</button>
            </div>
            <img src="img/mulheres-bonitas-trabalhando-juntas-em-uma-empresa-iniciante 1.png" alt="imagem-recrutamento" class="e-img">
        </div>
        <div class="card">
            <div class="e-content">
                <p class="e-info">Reuniões mensais de análises de resultados</p>
                <p class="e-info">Reunião mensal de desempenhos</p>
                <p class="e-info">Especialistas e generalistas envolvidos diretamente</p>
                <button class="b-secundary" onclick="send()">Fale com um especialista!</button>
            </div>
            <img src="img/apresentacao-de-negocios-em-uma-tela-de-laptop 1.png" alt="imagem-recrutamento" class="e-img" id="e-img3">
        </div>
    </section>
        
    <?php 
        include '../../view/web-components/menu/menu.php';
        include '../../view/web-components/btn-wtsp/btn.php';
        include '../../view/web-components/footer/footer.php';
    ?>

    <script src="../../view/web-components/scroll-clients/scroll.js"></script>
    <script src="../../view/web-components/menu/app.js"></script>

</body>
</html>