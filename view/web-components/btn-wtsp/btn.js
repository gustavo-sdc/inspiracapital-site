class btn extends HTMLElement{
    constructor(){
        super()
        /*
        const shadow = this.attachShadow({mode: 'open'})

        const foot = this.elements()

        shadow.appendChild(this.style())
        shadow.appendChild(foot)
        */
        const html = this.menu()
        const css = this.style()

        this.appendChild(html, css)
    }

    elements(){
        const html = document.createElement('section')
        html.setAttribute('id', 'rodape' )
        html.innerHTML=`
        <div class="btn-whatsapp-fix">
            <a href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0" target="_blank" name="whatsappButton">
                <img class ="img-whatsapp-icon" src="https://inspiracapital.com.br/img/icones/icon-whtsp.png" alt="Icone-Whatsapp">
            </a>
        </div>
        `
        return html
    }

    style(){
        const styles = document.createElement('style')
        styles.textContent=`
        .btn-whatsapp-fix{
            width: max-content;
            position: fixed;
        
            bottom: 2.5vh;
            right: 4vw;
            height: 12.5vh;    
        }
        
        .img-whatsapp-icon{
            width: 8vh;
            height:8vh;
        }
        
        .btn-whatsapp-fix:hover .img-whatsapp-icon{
            width: 10vh;
            height: 10vh;
            transition:.5s;
        
        }

        @media (max-width: 550px){
            .btn-whatsapp-fix{
                right:10vw;
            }
        }
        `
        return styles
    }
}

customElements.define('wtsp-button', btn)