import state from "./state.js";

export async function sendForm(name, email, tel, businessName) {
    const data = {
        name,
        email,
        tel,
        cargo: null,
        businessName
    }

    try{
        const url = `../../util/php/contato-lp.php?nome=${name}&email=${email}&numero=${tel}&cargo=${data.cargo}&empresa=${businessName}`
        const isComplete = name || email || tel || businessName != "" ? true : false

        if(isComplete){
            let request =  new XMLHttpRequest();

            request.open("GET",url,false);
            request.send();
            
            let resultado = JSON.parse(request.responseText);

            if(resultado.status == true){
                state.req = true
            }else{
                state.req = false
            }

            state.send = true
    }else{
            document.getElementById("Aviso").innerHTML = "Preencha todos os campos";
    }

    } catch{

    }

}