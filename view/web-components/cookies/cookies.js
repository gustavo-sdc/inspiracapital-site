class alertcookie extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode: 'open'})

        const alert = this.elements()
        const scpt = this.script()

        shadow.appendChild(this.style())
        shadow.appendChild(alert)
        shadow.appendChild(scpt)
    }

    elements(){
        const html = document.createElement('section')
        html.setAttribute('class', 'alert align' )
        html.innerHTML=`
            <div class="alert-info align">
            <img src="../../util/img/logos/logoInspiraIC.png" alt="logo-inspira-capital">
            <h2 class="alert-title">Aviso de Cookies & Privacidade</h2>
            <p class="alert-description">
                Nós e selecionados usamos cookies ou tecnologias similares para finalidades técnicas.
                Use o botão “Aceitar” para consentir. </p>
            </div>
            <div class="alert-buttons">
                <button class="b-secundary alert-button" onclick="acceptCookies()">
                    Aceitar
                </button>
        
            </div>  
        `
        return html
    }

    style(){
        const styles = document.createElement('style')
        styles.textContent=`
        .b-secundary{
            background-color: var(--color-secundary--);
            border: none;
            padding: 1%;
            border-radius: 10px;
            color: white;
            font-family:var(--inter--);
            font-size: 1.4rem;
        
            width:150px;
            height:50px;
        }
        
        .align{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .alert{
            position: fixed;
            top: 15%;
            left: 20%;
            z-index: 999;

            background-color: var(--color-primary--);
            border-radius: 20px;

            padding: 5%;

            height: 50vh;
            width: 50vw;

        }    

        .alert-title{
            font-size: 2.5rem;
            font-family: var(--montserrat--);
            font-weight: 400;

            color:var(--color-secundary--);

        }

        .alert-description{
            color: white;
            font-weight: 300;
            margin: 5% auto;
            font-size: 1.5rem;
            text-align: center;
        }

        .alert-button{
            border: none;
            border-radius: 10px;

            height: 2p0x;
        }

        .alert-buttons{
            width: inherit;

            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            justify-content: space-evenly;
        }
        
        `
        return styles
    }

    script(){
        const scrp = document.createElement('script')
        scrp.textContent=`
            const alert = document.querySelector('alert-cookie').shadowRoot.querySelector('.alert') 


            let cookie = sessionStorage.getItem('cookie')
            console.log(cookie)

            if (cookie =='accept'){
                alert.style.display ='none'

            }

            function acceptCookies(){
                sessionStorage.setItem('cookie', 'accept')

                console.log(localStorage)
                alert.style.display ='none'
            }
        `

        return scrp
    }
}

customElements.define('alert-cookie', alertcookie)
