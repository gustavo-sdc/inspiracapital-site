class load extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode:'open'})

        const element = this.element()
        const styles = this.styles()

        shadow.appendChild(element)
        shadow.appendChild(styles)
    }

    element(){
        const html = document.createElement('section')
        html.setAttribute('class', 'load')
        html.innerHTML=`
            <section class="load">
                <h1 class="l-title">Olá!! Seja muito bem vindo ao futuro da gestão de empresas...</h1>
            </section>   
        `

        return html
    }

    styles(){
        const style = document.createElement('style')
        style.innerText=
        `
        .load{
            position:fixed;
            z-index: 1000;

            width: 100vw;
            height: 100vh;

            background-color: white;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .l-title{
            color: var(--color-primary--);
            font-family:var(--montserrat--)
        }

        .l-title:after{
            content: '|';
            margin-left: 5px;
            opacity: 1;
            animation: pisca .7s infinite;
        
        }

        @keyframes pisca{
            0%, 100%{
                opacity: 1;
            }
            50%{
                opacity: 0;
            }
        }
        `

        return style
    }
}

customElements.define('load-screen', load)