import * as e from './elements.js'
import { dowloadPDF } from './dowload.js'
import state from './state.js'
import { sendForm } from './send.js'

e.sendButton.addEventListener('click', event =>{
    event.preventDefault()

    sendForm(e.name.value, e.email.value, e.tel.value, e.businessName.value)
    
    if (state.req){
        console.log(state.req)
        e.sendButton.classList.toggle('sended')
        e.sendButton.textContent ='Enviado!'

        dowloadPDF()

    }
    else{
        e.sendButton.textContent ='Não enviado!'
    }
})
