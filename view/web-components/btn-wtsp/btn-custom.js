const body = document.querySelector('body')

const btn_custom = document.createElement('section')
btn_custom.setAttribute('id', 'rodape' )
btn_custom.innerHTML=`
<style>
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
</style>

<div class="btn-whatsapp-fix">
    <a href="https://api.whatsapp.com/send/?phone=5511997618764&text&type=phone_number&app_absent=0" target="_blank" name="whatsappButton">
        <img class ="img-whatsapp-icon" src="https://inspiracapital.com.br/img/icones/icon-whtsp.png" alt="Icone-Whatsapp">
    </a>
    <slot></slot>
</div>
`