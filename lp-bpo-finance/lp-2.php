<?php
    $msg_Contato="";

    if(isset($_POST['nome'])){
        require_once("../../util/php/contato-lp.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles Start-->
        <!-- Styles End-->
        <link rel="stylesheet" href="../util/css/rodape/rodape.css">
        <link rel="stylesheet" href="../src/layout/lp-bpo.css">
        <link rel="shortcut icon" href="../util/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
        <!-- SEO -->
        <link rel="shortcut icon" href="../util/img/favicon.ico" type="image/x-icon"> 
        
        <!-- SEO -->
        <link rel="shortcut icon" href="../util/img/favicon.ico" type="image/x-icon">
        <meta name="robots" content="index, follow">
        <meta property="publisher" content="Inspira Capital">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:region" content="Brasil">
        <meta property="og:author" content="Inspira Capital">
        <meta property="og:site_name" content="Inspira Capital">
        <meta name="twitter:card" content="summary_large_image">   

        <!-- Link da página acessada -->
        <link rel="canonical" href="https://inspiracapital.com.br/produtos/bpo-finance/">
        <meta property="og:url" content="https://inspiracapital.com.br/produtos/bpo-finance/lp">

        <!-- Title -->
        <title>BPO Finance: Terceirização para controle financeiro - Inspira</title>
        <meta property="og:title" content="BPO Finance: Terceirização para controle financeiro - Inspira">
        <meta name="twitter:title" content="BPO Finance: Terceirização para controle financeiro - Inspira">

        <!-- Description -->
        <meta name="description" content="Com o BPO Finance, assumimos a operação e gestão financeira da sua empresa, desde o registro no sistema, emissão de notas fiscais e boletos, e mais!">
        <meta property="og:description" content="Com o BPO Finance, assumimos a operação e gestão financeira da sua empresa, desde o registro no sistema, emissão de notas fiscais e boletos, e mais!">
        <meta name="twitter:description" content="Com o BPO Finance, assumimos a operação e gestão financeira da sua empresa, desde o registro no sistema, emissão de notas fiscais e boletos, e mais!">

        <!-- Link da imagem do banner do produto -->
        <meta property="og:image" content="https://inspiracapital.com.br/img/LP/bpo-1/back-lp-1.png">
        <meta name="twitter:image" content="https://inspiracapital.com.br/img/LP/bpo-1/back-lp-1.png">
        <meta name="thumbnail" content="https://inspiracapital.com.br/img/LP/bpo-1/back-lp-1.png">       
        

        <!-- JS -->
        <script type="module" src="../controller/web-components/components-controller.js"></script>
        <script src="../controller/redirect-buttons.js"></script>

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
                <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54CSTNW"
                height="0" width="0" style="display:none;visibility:hidden">
                </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->       

        <!-- Main Start -->
        <section class="inicio">
                <div class="container">
                        <img class="logo-main" src="../img/logo/logo-inspira-white.png" alt="logo-inspira-capital">
                        <div class="content-text">
                                <h1 class="i-title-2">Está cansado de lidar com as dores e frustrações de tentar equilibrar suas finanças e o foco no crescimento da sua empresa?</h1>
                                <p class="i-info">Deixe as complexidades financeiras com a Inspira Capital e foque no crescimento do seu negócio. Tenha mais tempo para o que realmente importa.</p>        
                        </div>
                </div>

                <div class="container-contact" id="contato">
                        <form action="" method="post" class="contact">
                                <h2 class="contact-title">Preencha o Formulário que nosso especialista entrará em contato.</h2>

                                <p id="Aviso"><?php echo $msg_Contato;?></p>
                                <input type="text" name="nome" id="nome" placeholder="Nome">
                                <input type="text" name="email" id="email" placeholder="E-mail">
                                <input type="text" name="numero" id="numero"  pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" placeholder="Número: XX-XXXXX-XXXX">
                                <input type="text" name="cargo" id="cargo" placeholder="Cargo">
                                <input type="text" name="empresa" id="empresa" placeholder="Empresa">
                                
                                <input class="send b" id="EnviarContato" onclick="EnviarFormulárioLP()" type="button" value="Fale com um especialista >">
                        </form>
                </div>
        </section>
        <!-- Main End -->

        <!-- Clientes Start -->
        <section class="container-clients">
                <div class="box-client">
                        <div class="clients">
                                <img src="../img/clientes/vitalmed.png" alt="Vitalmed" class="logo-client left">
                                <img src="../img/clientes/alpina.png" alt="Alpina" class="logo-client right">
                                <img src="../img/clientes/Bic-Logo.png" alt="Bic" class="logo-client left">
                                <img src="../img/clientes/predilecto.png" alt="Predilecto" class="logo-client right">
                                <img src="../img/clientes/cargill-logo-1.png" alt="Cargill" class="logo-client left">
                                <img src="../img/clientes/logika.png" alt="Logika" class="logo-client right">
                                <img src="../img/clientes/clicksign.png" alt="Clisksign" class="logo-client left">
                                <img src="../img/clientes/frilog.png" alt="Frilog" class="logo-client right">
                                <img src="../img/clientes/givaudan.png" alt="Givaudan" class="logo-client left">
                        </div>
                        <div class="clients-cta">
                                <h2 class="clients-title">EMPRESAS QUE CONFIAM NA INSPIRA</h2>
                                <a href="#contato">
                                        <button class="clients-btn b-cta b" >Fale com um especialista ></button>
                                </a>
                        </div>
                        <div class="clients">
                                <img src="../img/clientes/claro.png" alt="Claro" class="logo-client right">
                                <img src="../img/clientes/monte.png" alt="Monte" class="logo-client left">
                                <img src="../img/clientes/3 corações.png" alt="3 Corações" class="logo-client right">
                                <img src="../img/clientes/trium.png" alt="Trium" class="logo-client left">
                                <img src="../img/clientes/sandoz.png" alt="Sandoz" class="logo-client right">
                                <img src="../img/clientes/RH-WHITE.png" alt="Rhecrutalent" class="logo-client left">
                                <img src="../img/clientes/redbull.png" alt="RedBull" class="logo-client right">
                                <img src="../img/clientes/brill.png" alt="Brill Brasil" class="logo-client left">
                        </div>
                </div>
        </section>
        <!-- Clientes End -->

        <!-- Benefícios Start -->
        <section class="container-beneficios">
                <h2 class="b-header-title">Benefícios</h2>
                <div class="b-box-first">
                        <h2 class="b-title">Controle financeiro sólido</h2>
                        <p class="b-description text-black">Tenha visibilidade total das suas finanças, com relatórios atualizados e análises estratégicas para embasar suas decisões.</p>
                </div>
                <div class="b-box-secund">
                        <h2 class="b-title">Mais tempo para o seu core business</h2>
                        <p class="b-description ">Delegue as atividades financeiras para nossa equipe especializada e concentre-se no que você faz de melhor.</p>
                </div>
                <div class="b-box-third">
                        <h2 class="b-title">Custo benefício</h2>
                        <p class="b-description">Comparativo de mercado com Inspira BPO Finance</p>
                        <div class="inside-box">
                                <div class="i-box">
                                        <img src="../img/LP/bpo-1/Vector.png" alt="" class="icon">
                                        <div class="i-content">
                                                <h3 class="b-title">Funcionário</h3>
                                                <p class="i-b-description">Salário de R$2.200.00 à R$5.000,00
                                                        + Encargos Trabalhistas</p>
                                        </div>
                                </div>

                                <hr class="line">
                                
                                <div class="i-box">
                                        <img src="../img/LP/bpo-1/IoCogOutline.png" alt="" class="icon">
                                        <div class="i-content">
                                                <h3 class="b-title">BPO Finance</h3>
                                                <p class="i-b-description">Todas as funções realizadas por uma equipe especializada no setor financeiro, com custo inicial menor que um salário de um funcionário, sem encargos trabalhistas.</p>                                                
                                        </div>
                                </div>
                        </div>
                </div>

                <a href="#contato" class="b-b-cta b">Fale com um especialista ></a>
        </section>
        <!-- Benefícios End -->

        <!-- Inspira Start -->
        <section class="container-inspira">
                <div class="content">
                        <h2 class="inspira-title">Quem é a Inspira?</h2>
                        <p class="i-description">Somos especialistas em BPO financeiro. Com uma equipe experiente e competente, estamos aqui para ajudá-lo a superar os desafios financeiros e liberar seu tempo para o que realmente importa: o crescimento do seu negócio.</p>
                        <a href="#Inspira">
                                <img src="../img/LP/bpo-1/IoChevronDownSharp.png" alt="icon-down" class="i-icon">
                        </a>
                </div>
                <div class="inspira-content" id="Inspira">
                        <h2 class="i-subtitle">Por que escolher a Inspira?</h2>
                        <div class="i-card">
                                <h3 class="card-title">Mercado Tradicional</h3>
                                <li class="i-list">
                                        <a class="i-item">Serviços mais caros;</a>
                                        <a class="i-item">Falta de relatório para contribuir com o crescimento da empresa;</a>
                                        <a class="i-item">Não tem uma visualização dos dados;</a>
                                        <a class="i-item">Trabalho isolado da empresa que contratou;</a>
                                        <a class="i-item">Falta de olhar estratégico.</a>
                                </li>
                        </div>
                        <div class="i-card">
                                <h3 class="card-title">BPO Finance</h3>
                                <li class="i-list">
                                        <a class="i-item">Preço justo;</a>
                                        <a class="i-item">Relatórios de acompanhamento semanais e mensais;</a>
                                        <a class="i-item">Visualização das transações com maior impacto no dia a dia das empresas;</a>
                                        <a class="i-item">Atuam de maneira conultiva, diagnosticando os problemas, proponto soluções e implementando ações.</a>
                                        <a class="i-item">Insights estratégicos baseados no histórico da sua empresa com um CFO.</a>  
                                </li>
                        </div>
                </div>
                <div class="content">
                        <p class="i-description">Fale com um de nossos especialistas e descubra como a Inspira Capital pode ajudar a sua empresa a ter uma equipe financeira competente e confiável, para que você possa focar exclusivamente nas atividades-chave do seu negócio.</p>
                        <a class="b-cta" href="#contact">
                                <button class="i-cta b-cta b">Fale com um especialista ></button>
                        </a>
                </div>
        </section>
        <!-- Inspira End -->

        <!-- Footer Start -->
        <footer>
                <nav class="f-nav">
                        <h2 class="f-title">Desenvolvido por <a href="https://inspiracapital.com.br" class="f-link">Inspira Capital</a></h2>
                        <a class="b-cta" href="#contato">
                                <button class="f-cta b">Fale com um especialista ></button>
                        </a>
                </nav>
        </footer>
        <!-- Footer End -->

        <script>
        
                // CONTATO
                function  EnviarFormulárioLP(){
                        let btn = document.getElementById("EnviarContato");
                        let nome = document.getElementById("nome").value;
                        let email = document.getElementById("email").value;
                        let numero = document.getElementById("numero").value;
                        let cargo = document.getElementById("cargo").value;
                        let empresa = document.getElementById("empresa").value;
                        
                        let url = "../../util/php/contato-lp.php?nome="+nome+"&email="+email+"&numero="+numero+"&cargo="+cargo+"&empresa="+empresa;
        
                        if(nome != "" & email != "" & numero != "" & cargo !="" &empresa !=""){
                                let request =  new XMLHttpRequest();
                                request.open("GET",url,false);
                                request.send();
                                    let resultado = JSON.parse(request.responseText);
                                
                                if(resultado.status==true){
                                btn.style.backgroundColor = "green";
                                btn.value = "Enviado";
                                btn.onclick= null;
                                window.location.href="https://inspiracapital.com.br/lp-bpo-finance/agradecimento";
                                }else{
                                btn.style.backgroundColor = "red";
                                btn.value = "ERROR";
                                btn.onclick= null;

                                window.location.href='https://inspiracapital.com.br/lp-bpo-finance/agradecimento/'
                                }
                        }else{
                                document.getElementById("Aviso").innerHTML = "Preencha todos os campos";
                        }
                }

        </script>
</body>
</html>