class callToAction extends HTMLElement{
    constructor(){
        super()

        const shadow = this.attachShadow({mode:'open'})

        const html = this.html()
        const css = this.css()

        shadow.appendChild(html, css)
    }

    html(){
        const htmlElement = document.createElement('div')
        htmlElement.setAttribute('class', '')

        htmlElement.innerHTML=`
        <a href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0" name="link-fale-com-um-especialista" class="btn-cta" >
            Fale com um especialista
        </a>
        `

        return htmlElement
    }

    css(){
        const styles = document.createElement('style')
        styles.textContent=`
        .btn-cta{
            text-decoration: none;
            color: #FFF;
            font-family: 'Monteserrat', sans-serif;

            background-color: #FF8A00;
            border-radius: 1rem;

            padding: 1rem;
            
            font-size:1.5rem;

            margin:1.5rem;
        }
        `

        return styles
    }
}

customElements.define('button-cta', callToAction)