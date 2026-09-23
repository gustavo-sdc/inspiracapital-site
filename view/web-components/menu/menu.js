class menu extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode:'open'})

        const element = this.menu()

        shadow.appendChild(this.styles())
        shadow.appendChild(element)      

    }

    menu(){
        const element = document.createElement('header')
        element.setAttribute('class', 'cabecalho')
        element.innerHTML=`
        <section class="header-top">
                <div class="menu">
                    <span class="icon-menu">&#9776;</span>
                </div>
                <div class="list-options">
                    <a class="m-option" href="https://inspiracapital.com.br/" target="_blank">
                        HOME
                    </a>
                    <a class="m-option" href="https://inspiracapital.com.br/sobre/" target="_blank">
                        TIME
                    </a>
                    <a class="m-option" href="https://inspiracapital.com.br/portal/" target="_blank">
                        PORTAL
                    </a>
                    <a class="m-option" href="https://inspiracapital.com.br/produtos/#solucoes" target="_blank">
                        SOLUÇÕES
                    </a>
                </div>
                <slot></slot>
        </section>
        `
        return element
    }

    styles(){
        const style = document.createElement('style')
        style.textContent =`
        
            header{
                width: max-content;
                height: max-content;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                position: fixed;
                top: 2.5vh;
                right: 4vw;
                z-index: 0;

                transition:.1s;
            }

            .header-top{
                width: max-content;
                height: 10vh;

                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                box-sizing:border-box;

                padding:0 5%;
                transition:.5s;
            }

            .menu{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                padding:1vw 0 1vw 0;

                width: max-content;
            }

            .icon-menu{
                font-size:2rem;
                color:var(--color-secundary--);
            }

            .m-title{
                font-family:var(--montserrat--);
                font-size: 1.25rem;
                margin:1.5% 0%;
                color: var(--color-secundary--);
            }

            .list-options{
                display: none;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;

                width: 60%;
            }

            .m-option{
                margin: 0% 2% 0% 2%;
                text-decoration: none;
                font-size: 1.3rem;
                color: var(--color-primary--);
                font-weight: 400;
            }

            /* Responsividade */

            @media (max-width: 1000px){
                .solucoes{
                    width: 90vw;
                }

                header{
                    right: 5vh;

                    justify-content: center;
                    align-items: center;
                }
            }

            @media (max-width: 550px){
                .header-top{
                    
                    justify-content: left;
                }

                .menu{
                    margin: 2.5%;
                }
            }

            /* Efeitos */

            input{
                display: none;
            }

            #solucoes:checked + .solucoes{
                display: flex;
            }

        `
        return style
    }

}


customElements.define('menu-inspira', menu)