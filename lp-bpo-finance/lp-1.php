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
        <link rel="stylesheet" href="../src/layout/lp-bpo.css">
        <link rel="stylesheet" href="../util/css/rodape/rodape.css">
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
        <div class="app">
                <!-- Main Start -->
                <section class="inicio">
                        <div class="inicio-box">
                                <img src="../img/logo/logo-inspira-white.png" alt="logo-inspira-capital">
                                <div class="i-content">
                                        <h1>Chega de se preocupar com inadimplência, fluxo de caixa desorganizado e falta de controle sobre seus investimentos!</h1>
                                        <p>
                                                Deixe as complexidades financeiras com a Inspira Capital e foque no crescimento do seu negócio. 
                                                Tenha mais tempo para o que realmente importa.
                                        </p>        
                                </div>
                        </div>

                        <form action="" method="post" class="contact" id="contact">
                                <fieldset>
                                        <legend>
                                                Inscreva-se agora e receba um <span>e-book de planejamento financeiro gratuito!</span> 
                                        </legend>
                                        <p id="Aviso"><?php echo $msg_Contato;?></p>

                                        <fieldset class="fieldset-box">
                                                <fieldset class="fieldset-content">
                                                        <div>
                                                                <label for="nome">Nome</label>
                                                                <input type="text" name="nome" id="nome">
                                                        </div>
                                                        <div>
                                                                <label for="cargo">Cargo</label>
                                                                <input type="text" name="cargo" id="cargo">
                                                        </div>
                                                </fieldset>

                                                <fieldset class="fieldset-content">
                                                        <div>
                                                                <label for="numero">Número<span>(xx-xxxxx-xxxx)</span></label>
                                                                <input type="text" name="numero" id="numero"  pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}">
                                                        </div>
                                                        <div>
                                                                <label for="empresa">Empresa</label>
                                                                <input type="text" name="empresa" id="empresa">
                                                        </div>

                                                </fieldset>
                                                <div>
                                                        <label for="email">E-mail</label>
                                                        <input type="text" name="email" id="email">
                                                </div>
                                        </fieldset>

                                        <div class="send-content">
                                                <label for="EnviarContato">Inscreva-se ></label>
                                                <input class="send" id="EnviarContato" onclick="EnviarFormulárioLP()" type="button" value="Inscreva-se >">Inscreva-se ></input>
                                        </div>
                                </fieldset>     
                        </form>
                </section>
                <!-- Main End -->

                <!-- Clientes Start -->
                <section class="clients">
                        <div>
                                <img src="../img/clientes/scooto.png" alt="Scooto" class="logo-client left">
                                <img src="../img/clientes/guara.png" alt="Guara" class="logo-client right">
                                <img src="../img/clientes/ecs.png" alt="ECS" class="logo-client left">
                                <img src="../img/clientes/predilecto.png" alt="Predilecto" class="logo-client right">
                                <img src="../img/clientes/logika.png" alt="Logika" class="logo-client right">
                                <img src="../img/clientes/clicksign.png" alt="Clisksign" class="logo-client left">
                                <img src="../img/clientes/frilog.png" alt="Frilog" class="logo-client right">
                                <img src="../img/clientes/givaudan.png" alt="Givaudan" class="logo-client left">
                        </div>
                        <div class="c-content">
                                <h2>Empresas que confiam na <span>Inspira Capital</span></h2>
                        </div>
                        <div>
                                <img src="../img/clientes/monte.png" alt="Monte" class="logo-client left">
                                <img src="../img/clientes/synnex.png" alt="Synnex" class="logo-client right">
                                <img src="../img/clientes/premetal.png" alt="Premetal" class="logo-client left">
                                <img src="../img/clientes/sandoz.png" alt="Sandoz" class="logo-client right">
                                <img src="../img/clientes/trium.png" alt="Trium" class="logo-client left">
                                <img src="../img/clientes/primequali.png" alt="Primequali" class="logo-client right">
                                <img src="../img/clientes/Hewlett.png" alt="Hewlett" class="logo-client right">
                                <img src="../img/clientes/brill.png" alt="Brill Brasil" class="logo-client left">
                        </div>
                </section>
                <!-- Clientes End -->

                <!-- Benefícios Start -->
                <section class="benefits">
                        <h2>Benefícios</h2>
                        <div class='benefits-content'>
                                <div class="benefits-box">
                                        <h2>Controle financeiro sólido</h2>
                                        <p>Visibilidade total das suas finanças, com relatórios e análises estratégicas para tomar decisões.</p>
                                </div>
                                <div class="benefits-box">
                                        <h2>Mais tempo para o seu negócio</h2>
                                        <p>Delegue as atividades financeiras para nossa equipe especializada e concentre-se no que você faz de melhor.</p>
                                </div>
                                <div class="benefits-box">
                                        <h2>Custo benefício</h2>
                                        <p>Veja logo abaixo, um comparativo de uma equipe interna com o BPO Finance da Inspira Capital.</p>
                                </div>
                        </div>

                        <div class="box">
                                <div>
                                        <div>
                                                <h3>1 Funcionário</h3>
                                                <p>Salário de R$2.200.00 à R$5.000,00
                                                        + Encargos Trabalhistas</p>
                                        </div>
                                </div>

                                <hr class="line">
                                
                                <div>
                                        <div>
                                                <h3>Financeiro por assinatura</h3>
                                                <p>Equipe especializada no setor financeiro + Custo inicial menor que o salário de um funcionário + 0 encargos trabalhistas.</p>                                                
                                        </div>
                                </div>
                        </div>
                        <a href="#contato">
                                <button>Fale com um especialista ></button>
                        </a>
                        
                </section>
                <!-- Benefícios End -->

                <!-- Inspira Start -->
                <section class="inspira">
                        <div class="apresentation">
                                <h2>Quem é a Inspira Capital?</h2>
                                <p>Somos o braço direito do gestor, com uma equipe experiente e competente, estamos aqui para ajudá-lo a superar todos os desafios. E hoje, estamos aqui para eliminar seus problemas financeiros, e liberar seu tempo para o que realmente importa: o crescimento do seu negócio.</p>
                        </div>
                </section>
                <section class="inspira">
                        <div class="i-box" id="Inspira">
                                <h2>
                                        Por que escolher a 
                                        <span>Inspira Capital?</span>
                                </h2>
                                <div class="card">
                                        <h3>Mercado Tradicional</h3>
                                        <ul>
                                                <li>Serviços mais caros;</li>
                                                <li>Falta de relatório para contribuir com o crescimento da empresa;</li>
                                                <li>Não tem uma visualização dos dados;</li>
                                                <li>Trabalho isolado da empresa que contratou;</li>
                                                <li>Falta de olhar estratégico.</li>
                                        </ul>
                                </div>
                                <div class="card">
                                        <h3>Financeiro por assinatura</h3>
                                        <ul>
                                                <li>Preço justo;</li>
                                                <li>Relatórios de acompanhamento semanais e mensais;</li>
                                                <li>Visualização das transações com maior impacto no dia a dia das empresas;</li>
                                                <li>Atuam de maneira conultiva, diagnosticando os problemas, proponto soluções e implementando ações.</li>
                                                <li>Insights estratégicos baseados no histórico da sua empresa com um CFO.</li>  
                                        </ul>
                                </div>
                        </div>

                        <div class="content">
                                <p>Fale com um de nossos especialistas e descubra como a Inspira Capital pode ajudar a sua empresa a ter uma equipe financeira competente e confiável, para que você possa focar exclusivamente nas atividades-chave do seu negócio.</p>
                                <a href="#contact">
                                        <button>Inscreva-se agora ></button>
                                </a>
                        </div>
                </section>
                <!-- Inspira End -->

                <!-- Footer Start -->
                <footer>
                        <h2>Desenvolvido por <a href="https://inspiracapital.com.br" class="f-link">Inspira Capital</a></h2>
                </footer>
                <!-- Footer End -->
        </div>

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

