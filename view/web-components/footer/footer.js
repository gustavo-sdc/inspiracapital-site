class rodape extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode: 'open'})

        const foot = this.elements()

        shadow.appendChild(this.style())
        shadow.appendChild(foot)
    }

    elements(){
        const html = document.createElement('section')
        html.setAttribute('id', 'rodape' )
        html.innerHTML=`
        <div id="r-solucoes">
            <ul class="nav-list">
                <li class="r-list">
                    <a target="_blank" href="https://inspiracapital.com.br/" class="r-item">Home</a>
                    <a target="_blank" href="https://inspiracapital.com.br/produtos/" class="r-item">Soluções</a>
                    <a target="_blank" href="https://inspiracapital.com.br/sobre/" class="r-item">Time</a>
                    <a target="_blank" href="https://inspiracapital.com.br/carreiras/" class="r-item">Carreiras</a>
                    <a target="_blank" href="https://inspiracapital.com.br/portal/" class="r-item">Portal</a>
                    <a target="_blank" href="https://inspiracapital.com.br/privacidade" class="r-item">Privacidade</a>
                </li>
            </ul>

            <ul class="list-container">
                <li class="area-container">
                    <p>Financeiro</p>
                    <ol class="list-area">
                        <li>
                        <a target="_blank" target="_blank" href="https://inspiracapital.com.br/produtos/bpo-finance">BPO Finance</a>
                        <a target="_blank" target="_blank" href="https://inspiracapital.com.br/produtos/smart-control-finance/">Smart Control Finance</a>
                        <a target="_blank" target="_blank" href="https://inspiracapital.com.br/produtos/easy-finance/">Easy Finance</a>                       
                        </li>
                    </ol>    
                </li>
                
                <li class="area-container">
                    <p>Jurídico</p>
                    <ol class="list-area">
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/lgpd-ontrack/">LGPD Ontrack</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/jud-as-a-service/">Jud as a Service</a>
                    </ol>                         
                </li>
            
                <li class="area-container">
                    <p>Marketing & Vendas</p>
                    <ol class="list-area">                        
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/digital-mkt-ads/">Digital Marketing ADS</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/social-media-pro/">Social Media PRO</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/dna-branding/">DNA Branding</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/content-mkt/">Content MKT</a>   
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/smart-sites/">Smart Sites</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/corporate-video-fit/">Corporate Video</a>                        
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/events-ondemand/">Events OnDemand</a>                        
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/benchmarking-pro/index.html">Benchmarking PRO</a>
                    </ol>
                </li>

                <li class="area-container">
                    <p>Consultoria</p>
                    <ol class="list-area">
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/macrovision/">Macro Vision</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/waze-plan/">Waze Plan</a>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0">Process Optimizer</a>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0">ESG Journey</a>
                    </ol>                          
                </li>

                <li class="area-container">
                    <p>RH</p>
                    <ol class="list-area">
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/imove/">Imove</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/bpo-rh/">BPO RH</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/hunting/">Hunting</a>                        
                    </ol>
                </li>

                <li class="area-container">
                    <p>Gestão</p>
                    <ol class="list-area">
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/smart-control-360/">Smart Control 360</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/smart-control-log/">Smart Control Log</a>
                        <a target="_blank" href="https://inspiracapital.com.br/produtos/do-mei-ao-milhao/">Do Mei ao Milhão</a>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0">Digital Go</a>                        
                    </ol>
                </li>
            </ul>
        </div>
        </div>

        <div id="r-infos">
            <img src="https://inspiracapital.com.br/img/logo/logo-inspira-white.png" alt="inspira-capital" id="r-logo">
            <p class="r-description">
                A Inspira Capital é uma empresa de estratégia, inovação e gestão de negócios, com o propósito de ajudar na prática que pessoas e empresas possam se transformar na sua melhor versão, através de soluções inovadoras.
            </p>
            <ul class="container-list">
                <li class="list-local">
                    <a href="https://www.google.com/maps/dir//R.+Jo%C3%A3o+Kuhl+Filho,+18+-+Vila+Sao+Joao,+Limeira+-+SP,+13480-731,+Brasil/@-22.5635114,-47.4505049,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x94c8808aa5af363f:0x87a0e17371b29292!2m2!1d-47.4093049!2d-22.5635959!3e0?entry=ttu" class="r-local" target="_blank">
                        <img src="https://inspiracapital.com.br/img/icones/IoLocationSharp-orange.png" alt="limeira">
                        <p class="r-local">Rua Harmonia, 1250 - 8 andar - Vila Madalena - São Paulo/SP</p>
                    </a>
                    <a href="https://www.google.com/maps/dir//13+Hawley+Cres,+London+NW1+8NP/@51.5409166,-0.2252004,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x48761ae18c906bb5:0xa613581a76a07ffa!2m2!1d-0.1427994!2d51.5408387!3e0?entry=ttu" class="r-local" target="_blank">
                        <img src="https://inspiracapital.com.br/img/icones/IoLocationSharp-orange.png" alt="londres">
                        <p class="r-local">13 Hawley Crescent London NW1 8NP</p>
                    </a>
                </li>
            </ul>
            <div id="r-btn">
                <a class="rb-sociais" target="_blank" href="https://www.instagram.com/inspira.capital/">
                    <img class="r-img" src="https://inspiracapital.com.br/img/BtnFixo/instagram.png" alt="instagram">
                </a>
                <a class="rb-sociais" target="_blank" href="https://www.linkedin.com/company/inspiracapital/">
                    <img class="r-img" src="https://inspiracapital.com.br/img/BtnFixo/linkedin.png" alt="linkedIn">
                </a>
                <a class="rb-sociais" target="_blank" href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0">
                    <img class="r-img" src="https://inspiracapital.com.br/img/BtnFixo/whts.png" alt="whatsapp">
                </a>
            </div>
            <slot></slot>  
        </div>    
        `
        return html
    }

    style(){
        const styles = document.createElement('style')
        styles.textContent=`   
        *{
            color:white;
            font-family: 'Lexend Deca', sans-serif;
            font-size: 1em;
        }



        /*--------------------------------------------------------------------*/

        #rodape{
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;

            width:100vw;
            height: max-content;


            padding: 2% 0% 2% 0%;
            margin-top:  5vh;

            background-color: var(--color-primary--);
        }

        #r-logo{
            height:5vw;
            margin-bottom:5%;
        }

        /* CONTAINER */
        .nav-list{
            width: inherit;
            margin: 2.5% auto;
            border-bottom: 1px solid var(--color-secundary--);
            display: flex;
            justify-content: center;
            align-items: center;
            padding:0%;
        }

        .r-list{
            width: inherit;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .r-item{
            font-size: 1.5rem;
            font-family: var(--montserrat--);
            margin: 2.5% auto;
            font-weight: 500;

            width: max-content;
        }

        .r-title{
            font-size: 2rem;
        }

        .r-container{
            width: 55vw;

            margin-top: 5vh;

            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: start;
        }

        a{
            text-decoration: none;
            transition:.3s;
            font-size: 1.3rem;
            font-weight: 300;
        }

        a:hover{
            color:#EE8F2F;
        }

        #r-solucoes{
            margin-top: 5vh;

            width:45vw;

            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        p{
            color: #EE8F2F;
            font-size: 1.3rem;
            margin-bottom: 5%;
        }

        .area-container{
            style-type:none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            
            height: 22.5vh;    
            margin-bottom:2rem;
        }

        .list-container{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding-left: 7.5%;

            width: 45vw;
        }

        .container-list{
            padding:0%;
            margin-left:0vw;
            width:100%;
        }

        .list-area{
            width: 12.5vw;
            height: 17.5vh;
            margin: .5%;    

            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;

            padding:0%;
        }

        .list-area li{
            display:flex;
            flex-direction:column;
        }

        /* INFORMAÇÕES */

        #r-infos{
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: flex-start;

            width: 35vw;
            height:max-content;

        }

        .r-description{
            color:white;
            text-align: justify;
            font-size: 1.3rem;
            font-weight: 300;
            margin: 0%;
        }

        li{
            list-style-type: none;
            text-decoration: none;
        }

        .r-local{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: left;


            width: 100%;

            margin-top:3%;
        }

        .r-local{
            color: white;
            font-size: 1rem;
            margin: 0%;
        }

        .r-local img{
            height: 1vw;
            margin:1%;
        }


        /* BOTÕES */

        #r-btn{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .list-local{
            width: 30vw;
            margin: 2% 0% 2% 0%;

            display:flex;
            flex-direction: column;
            justfy-content: left;
            align-items: center;
        }

        .rb-sociais{
            width: 5vw;
            height: 5vh;

            border-radius: 10px;

            border: none;
            background-color: #EE8F2F;

            margin: 1%;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rb-sociais img{
            height: 1.5vw;
        }


        /* RESPONSIVIDADE */

        @media(max-width:900px){
            #rodape{
                display: flex;
                flex-direction: column-reverse;
                justify-content: center;
                align-items: center;

                height: max-content;
            }

            #r-logo{
                height: 25vw;
                margin:0 auto 0 auto;
            }

            #r-infos, #r-solucoes{
                width: 90%;
            }

            .list-local{
                width: 85vw;
            }

            #r-btn{
                flex-direction: column;
                width:90vw;
            }

            .rb-sociais{
                width: 80vw;
            }

            .rb-sociais img {
                height: 5vw;
            }

            .list-container{
                width: 100%;
                padding: 0%;
                margin: 2% auto;
            }

            .area-container{
                width: 35vw;
                height: 15vh;
            }

            .list-area{
                width: 55%;
            }

            a{
                width: 40vw;
                font-size: 1.5rem;
            }

            .r-item{
                font-size: 1.3rem;
            }

        }

        @media (max-width:400px){
            .area-container{
                height:max-content;
                margin:5% auto;
            }
        }

        
        `
        return styles
    }
}

customElements.define('footer-inspira', rodape)