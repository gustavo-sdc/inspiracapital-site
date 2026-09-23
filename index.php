<?php
    $msg_Contato="";

    if(isset($_POST['nome'])){
        require_once("util/php/contato.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--  Jquery -->
    <script rel="preconeect" src="./controller/js/jquery-3.7/jquery-3.7.0.js"></script>
            
    <!-- Google Tag Manager -->
    <script>(
        function(w,d,s,l,i){
            w[l]=w[l]|| [];w[l].push(
                {'gtm.start':
                new Date().getTime(),event:'gtm.js'
            });
            var f=d.getElementsByTagName(s)[0], 
                j=d.createElement(s),
                dl=l!='dataLayer'?'&l='+l:'';
                j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                f.parentNode.insertBefore(j,f);
        })
        
        (window,document,'script','dataLayer','GTM-54CSTNW');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9104300888338039"crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inspira Capital – Your Business, our focus.</title>
    <meta name="description" content="Somos o braço direito do empreendedor, atuamos nas principais frentes da sua empresa como o marketing, a gestão, a logística etc.">

    <link rel="shortcut icon" href="./view/img/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="./view/src/layout/home.css">
    <link rel="stylesheet" href="./view/src/theme/theme.css">

    <!-- SEO -->
    <meta name='robots' content='max-image-preview:large' />
    <link rel="canonical" href="https://inspiracapital.com.br/" />
    <!-- SEO -->

    <meta name="google-site-verification" content="F2ahQzLTgBrltAvgnZt3PIE1WqAHMYZAuG03Mvgrq3w" />

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54CSTNW" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--Area Inicial-->
    <main  id="Inicial">

        <section id="box-inicial">

            <img id="logo" src="./view/img/logo/logo-inspira-white.png" alt="Logo-Inspira-Capital">                        
            
            <div class="dropdown">
                <span class="pesquisa">
                    <p class="frase1">Olá gestor, qual área do seu negócio precisa de um braço direito?</p>
                    <button id="search">
                        <img src="./view/img/icones/search-icon.svg" style="width: 16px;" alt="icon-search">       
                    </button>
                </span>
                <div class="selection" style="display:none">
                    <ul>
                        <li class="section-select">
                            <a class="link-select" href="produtos/#FINANCE">Finanças</a>
                            <a class="link-select" href="produtos/#RH">R.H</a>
                            <a class="link-select" href="produtos/#MARKT">Marketing & Vendas</a>
                            <a class="link-select" href="produtos/#GEST">Gestão</a>                            
                            <a class="link-select" href="produtos/#CONSULT">Consultoria</a>
                            <a class="link-select" href="produtos/#JUD_VEN">Jurídico</a>
                            <a class="link-select" href="produtos/#tech">Tecnologia</a>
                        </li>
                    </ul>
                </div>
            </div>

            <a id="arrow-down" href="#footer-inspira"> 
                <img src="./view/img/icones/arrow-down-sign-to-navigate.png" alt="arrow-down" id="arrow-down-icon">
            </a>

        </section>
    </main>
    <!--Area Inicial-->

    <?php include './view/web-components/scroll-clients/scroll-clients.php';?>

    <!-- VÍDEO DO YOUTUBE -->
    <section id="video">
        <div id="video-description">
            <h2>Somos o braço direito do gestor!</h2>

            <button onclick="youtube('open')" name="Quem-somos">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#EE8F2F" class="bi bi-play-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                </svg>
            </button>

            
        </div>

        <hr id="wave">
        <hr id="wave-01">
        <hr id="wave-02">
        
        
        <div id="youtube-container" class="youtube-container" name="voltar">
            <button onclick="youtube('close')">
                <svg id="close" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="black" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
            </button>
            <lite-youtube videoid="upnD4MCh0sY&t" playlabel="Play"></lite-youtube>
        </div>
        
        
    </section>
    <!-- VÍDEO DO YOUTUBE -->
    
    <!-- Principais Produtos -->
    <section class="produtos">
        <h2>CONHEÇA NOSSAS <span>SOLUÇÕES</span></h2>

        <div class="slide" id="slide">
            <nav id="nav-slide">
                <li id="slider" class="slider"> 
                    <!--Finance-->
                    <a href="produtos/bpo-finance/" target="_blank" class="card">
                        <img src="./view/img/logo/bpo-finance.png" alt="Logo-BPO-Finance">
                    </a>
        
                    <a href="produtos/smart-control-finance/" target="_blank" class="card">
                        <img src="./view/img/logo/smart-control-finance.png" alt="Logo-Smart-Control-Finance">
                    </a>
                    
                    <a href="produtos/easy-finance/" target="_blank" class="card">
                        <img src="./view/img/logo/easy-finance.png" alt="logo-easy-finance">
                    </a>
                    <!--Rh-->
                    <a href="produtos/imove/" target="_blank" class="card">
                        <img src="./view/img/logo/inspira-move.png" alt="Logo-Inspira-Move">
                    </a>
        
                    <a href="produtos/bpo-rh/" target="_blank" class="card">
                        <img src="./view/img/logo/bpo-rh.png" alt="Logo-BPO-RH">
                    </a>
                    
                    <a href="produtos/hunting/" target="_blank" class="card">
                        <img src="./view/img/logo/hunting.png" alt="logo-easy-finance">
                    </a>
                    
                    <!--Consultoria-->
                    <a href="produtos/macrovision/" target="_blank" class="card">
                        <img src="./view/img/logo/macro-vision.png" alt="Logo-Macro-Vision">
                    </a>
        
                    <a href="produtos/waze-plan/" target="_blank" class="card">
                        <img src="./view/img/logo/waze-plan.png" alt="Logo-Waze-Plan">
                    </a>
                    
                    <a href="produtos/process-optmizer/" target="_blank" class="card">
                        <img src="./view/img/logo/process-optimizer.png" alt="logo-easy-finance">
                    </a>
                
                    <!--Marketing & Vendas-->

                    <a href="produtos/social-media-pro/" target="_blank" class="card">
                        <img src="./view/img/logo/social-media-pro.png" alt="logo-social-media-pro">
                    </a>
        
                    <a href="produtos/events-ondemand/" target="_blank" class="card">
                        <img src="./view/img/logo/logo-events-ondemand.png" alt="logo-events-ondemand">
                    </a>
                    
                    <a href="produtos/dna-branding/" target="_blank" class="card">
                        <img src="./view/img/logo/dna-branding.png" alt="logo-dna-branding">
                    </a>
        
                    <a href="produtos/content-mkt/" target="_blank" class="card">
                        <img src="./view/img/logo/content-mkt.png" alt="logo-content-mkt">
                    </a>
        
                    <a href="produtos/smart-sites/" target="_blank" class="card">
                        <img src="./view/img/logo/smart-sites.png" alt="logo-smart-sites">
                    </a>
                    
                    <a href="https://api.whatsapp.com/send/?phone=5511912083474&text&type=phone_number&app_absent=0" target="_blank" class="card">
                        <img src="./view/img/logo/digital-mkt-ads.png" alt="logo-digital-mkt-ads">
                    </a>
        
                    <a href="produtos/corporate-video-fit/" target="_blank" class="card">
                        <img src="./view/img/logo/logo-corporate-video-fit.png" alt="logo-smart-sites">
                    </a>
                    
                    <a href="produtos/benchmarking-pro/" target="_blank" class="card">
                        <img src="./view/img/logo/benchmarking-pro.png" alt="logo-benchmarking-pro">
                    </a>

                    <a href="produtos/smart-control-360/" target="_blank" class="card">
                        <img src="./view/img/logo/smart-control-360.png" alt="logo-smart-control-360">
                    </a>
        
                    <a href="produtos/smart-control-log/" target="_blank" class="card">
                        <img src="./view/img/logo/smart-control-log.png" alt="logo-smart-control-log">
                    </a>
                    
                    <a href="produtos/do-mei-ao-milhao/" target="_blank" class="card">
                        <img src="./view/img/logo/do-mei-ao-milhao.png" alt="logo-do-mei-ao-milhao">
                    </a>
                    <!--Jurídico-->
                    <a href="produtos/lgpd-ontrack/" target="_blank" class="card">
                        <img src="./view/img/logo/lgpd-ontrack.png" alt="logo-lgpd-ontrack">
                    </a>
        
                    <a href="produtos/jud-as-a-service/" target="_blank" class="card">
                        <img src="./view/img/logo/jud-as-a-service.png" alt="logo-jud-as-a-service">
                    </a>
                </li>
            </nav>
        </div>
     
        <button onclick="move('slider', 'left')" id="previus" class="back">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
            </svg>            
        </button>

        <button onclick="move('slider', 'right')" class="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
            </svg>            
        </button>
        
    </section>
    <!-- Principais Produtos -->

    <!--Redes Sociais-->
    <section class="container">
        <div id="redes-sociais">
            <h2>Siga-nos em nossas <span>redes sociais</span> e se mantenha sempre atualizado!</h2>
            <li>
                <a area-label="Veja o nosso Instagram" href="https://www.instagram.com/inspira.capital/" target="_blank" name="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FF8A00" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
                <a area-label="Veja o nosso LinkedIn" href="https://www.linkedin.com/company/inspiracapital/mycompany/" target="_blank" name="linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FF8A00" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
                <a area-label="Veja o nosso Spotify" href="https://open.spotify.com/show/64MFRepYao9jeZRZaQ3TAn" target="_blank" name="spotify">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FF8A00" class="bi bi-spotify" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                    </svg>
                </a>
            </li>
        </div>
    </section>
    <!--Redes Sociais-->

    <!--O que falam-->
    <div id="OqFalam">
        <h2>O QUE FALAM <span>DE NÓS</span></h2>
        <div id="Oqt0">
            <p>Iniciamos a parceria junto do INSPIRA e essa experiência tem sido fantástica, somos apoiados em todas as áreas. Toda a parte burocrática é muito bem desempenhada pelos profissionais.</p>
            <h3>Jefferson Paes <br> <span>Sócio Fundador da Vida Citrus</span></h3>
        </div>
        <div id="Oqt1" style="transform: translateY(-320px);">
            <p>Como cliente, agradeço o trabalho que estão desenvolvendo para nova empresa. A logo, materiais gráficos e apresentação executiva da minha nova empresa ficaram sensacionais!</p>
            <h3>Rafael Pedreira <br> <span>Sócio Prime Quali</span></h3>
        </div>
        <div id="Oqt2" style="transform: translateY(-640px);">
            <p>A Inspira nos trouxe à superfície, ajudando com os processos de cada área e principalmente com a organização delas. Deixando os números mais claros para nós e motivando para cada a serem melhores.</p>
            <h3>Nathalia Gomes <br> <span>Diretora Operacional da Brill Brasil</span></h3>
        </div>
        <nav>
            <div onclick="OqFalamMostr(0),ZerarRotOqFalam()" id="Oqb0"></div>
            <div onclick="OqFalamMostr(1),ZerarRotOqFalam()" id="Oqb1"></div>
            <div onclick="OqFalamMostr(2),ZerarRotOqFalam()" id="Oqb2"></div>
        </nav>

    </div>
    <!-- O que falam-->
    
    <!-- DESTAQUE -->
    <section id="destaque">
        <h2>DESTAQUES</h2>

        <div id="produto">            

            <img src="./view/img/logo/bpo-finance.png" alt="imagem-financeiro" id="icone-produto">
            <img src="./view/img/background-main/bpo-finance.png" alt="imagem-financeiro" id="background">

            <div id="content">
                <h2>Seu financeiro <span>sem dor de cabeça!</span></h2>
                <p>Realizamos toda a operação financeira, desde contas a receber, contas a pagar até a conciliação bancária, trazendo mais previsibilidade, segurança e economia as empresas.</p>
                <a href="produtos/bpo-finance/" target="_blank">
                    <button>SAIBA MAIS</button>
                </a>
            </div>
        </div>

        <div id="news">
            <div id="new">
                <img src="https://inspiracapital.com.br/portal/wp-content/uploads/2023/08/como-simplificar-processos-operacionais-e-aumentar-a-eficiencia-estrategias-e-beneficios.jpg" alt="imagem-news-01">
                <a href="https://inspiracapital.com.br/portal/como-simplificar-processos-operacionais-e-aumentar-a-eficiencia-estrategias-e-beneficios/" target="_blank">
                    <h2>Inspira <span>News</span></h2>
                    <p>Como simplificar processos operacionais e aumentar a eficiência: estratégias e benefícios</p>
                </a>
            </div>
            <div id="new">
                <img src="https://inspiracapital.com.br/portal/wp-content/uploads/2023/08/como-reduzir-custos-com-bpo-financeiro-estrategias-e-beneficios.jpg" alt="imagem-news-01">
                <a href="https://inspiracapital.com.br/portal/como-reduzir-custos-com-bpo-financeiro/" target="_blank">
                    <h2>Inspira <span>News</span></h2>
                    <p>Como reduzir custos com BPO financeiro: estratégias e benefícios</p>
                </a>
            </div>
            <div id="podcast">
                <img src="https://i.scdn.co/image/ab67656300005f1f007ba2086baa0e3a303db59d" alt="spotify">
                <a href="https://open.spotify.com/show/64MFRepYao9jeZRZaQ3TAn" target="_blank" name="spotify">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6rem" height="6rem" fill="#FF8A00" class="bi bi-spotify" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                    </svg>
                </a>
            </div>
            
        </div>

    </section>
    <!-- DESTAQUE -->

    <!--Contato-->
    <div id="Contato">
    <h2>Sua empresa precisa se <span>reinventar?</span></h2>
    <div></div>
    <h2>Nos conte mais…</h2>

    <form method="post" id="FormContato">
        <p id="Aviso"><?php echo $msg_Contato;?></p>

        <label  for="name">Nome</label>
        <input type="text" name="name" id="name" autocomplete="given-name">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" autocomplete="off">

        <label for="menssage">Mensagem</label>
        <textarea name="menssage" id="menssage" cols="30" rows="10"></textarea>
    
        <p id="resposta" style="margin: 2rem 0; font-size:2rem;">
            <?php
                // Verifica se o formulário foi enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Captura as informações do formulário
                    $nome = $_POST["name"];
                    $email = $_POST["email"];
                    $mensagem = $_POST["menssage"];

                    // Configurações do email
                    $para = "luiz.vicari@inspiracapital.com.br"; // substitua pelo endereço de email do destinatário
                    $assunto = "Novo lead";
                    $de = "luiz.vicari@inspiracapital.com.br";
                    
                    // Corpo do email
                    $corpo = "Nome: $nome\n";
                    $corpo .= "Email: $email\n";
                    $corpo .= "Mensagem: $mensagem\n";
                    

                    // Cabeçalhos do email
                    $cabecalhos = "From: $nome <$de>" . "\r\n";

                    if (mail($para, $assunto, $corpo, $cabecalhos)) {
                            echo "Email enviado com sucesso!";
                            
                    } else {
                        echo "Erro ao enviar o email.";
                    }  
                }
            ?>
        </p>

        <input id="EnviarContato" type="submit" value="Enviar">
    </form>
    </div>
    <!--Contato-->

    <?php 
        include './view/web-components/menu/menu.php';
        include './view/web-components/btn-wtsp/btn.php';
        include './view/web-components/footer/footer.php';
    ?>

    <script src="./controller/js/app.js"></script>
    <script src="./view/web-components/scroll-clients/scroll.js"></script>
    <script src="./view/web-components/menu/app.js"></script>

    <script>

function youtube(e){
    
    if (e == 'open'){
        //console.log('oi') 
        document.querySelector('#video-description').style.transform='translateX(-100vw)'
        document.querySelector('#youtube-container').style.transform='translateX(-100vw)'
    }
    else if(e == 'close'){
        //console.log('tchau')
        document.querySelector('#youtube-container').style.transform='translateX(0vw)'
        document.querySelector('#video-description').style.transform='translateX(0vw)'
    }
}; 

    </script>

</body>
</html>



