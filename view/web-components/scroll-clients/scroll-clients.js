class ClientScroll extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode:'open'})

        shadow.appendChild(this.style())

        const element = this.elements()        
        shadow.appendChild(element)


    }


    elements(){
        const section = document.createElement('section')
        section.setAttribute('class','container-clients')

        section.innerHTML=
            `
                <section class="scroll">
                    <h2 class="title">Clientes satisfeitos</h2>

                    <div id="slide">
                        <div id="container">
                            <img src="https://inspiracapital.com.br/img/clientes/alpina.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/Bic-Logo.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/brill.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/clicksign.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/ecs.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/frilog.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/guara.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/Hewlett.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/logika.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/monte.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/predilecto.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/premetal.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/primequali.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/redbull.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/sandoz.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/scooto.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/synnex.png" alt="logo-cliente" class="img">
                            <img src="https://inspiracapital.com.br/img/clientes/trium.png" alt="logo-cliente" class="img">
                        </div>
                    </div>
                    <slot></slot>
                </section>    
            `
        
        return section
    }

    style(){
        const styles = document.createElement('style')
        styles.textContent=`
            /* Esse CSS é responsavel por animar o empresas-Horizontal */
            /* Parceiros */

            h2{
                font-weight:400;
                font-size:2.8rem;
            }

            .title{
                color:white;
                font-family:'Lexend Deca';
                margin:0%;
                padding:1.5%;
                text-align:center;

                border-bottom: 2px solid var(--color-secundary--)
            }

            #slide{
                margin:2vh auto;
                display:flex;
                flex-direction: column;
                align-items: start;
                justify-content: left; 

                overflow: hidden;
                
                width:inherit;
            }

            .scroll{
                width: 90vw;
                height: max-content;
                
                display:flex;
                flex-direction: column;
                align-items: center;
                justify-content: start;
    
                padding: 1% 0%;
    
                background: linear-gradient(var(--gradient-blue-));
                margin: auto;
        
                border-radius: 20px;
            }
    
            #container{
                display: flex;
                flex-direction: row;
                align-items: start;
                justify-content: left;
    
                width: max-content;
                height: inherit;
    
                transition: transform 0.5s ease-in-out;
                transform: translateX(0);
            }

            .container-clients{
                margin:10vh auto;
            }
    
            .img{
                width: 100px;
                margin: auto 20px auto 20px;
            }
    

        `
        
        return styles
    }
}


customElements.define('scroll-clients', ClientScroll)

