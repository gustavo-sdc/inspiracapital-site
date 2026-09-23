var Menu = this.document.getElementById("Menu2");//Salva o Menu2 movel

//Evento scrol
window.addEventListener('scroll',function(){
    var PosTela = document.documentElement.scrollTop;//Posção da tela

    //
    //esconde e mostra o menu
    console.log(PosTela);
    if(PosTela >= 450){
        Menu.style.top = "0px";

    }else{
        Menu.style.top = "-70px";
    }
    //esconde e mostra o menu
    //


    //Responsavel por mostrar no menu onde o cliente está
    // if(PosTela > 400 & PosTela < 1000){
    //     this.document.getElementById("Mparc").style.borderBottomColor = "#EE8F2F";
    // }else{this.document.getElementById("Mparc").style.borderBottomColor = "transparent";}

    // if(PosTela > 1000 & PosTela < 1500){
    //     this.document.getElementById("Mfeed").style.borderBottomColor = "#EE8F2F";
    // }else{this.document.getElementById("Mfeed").style.borderBottomColor = "transparent";}

    // if(PosTela > 2000 & PosTela < 2800){
    //     this.document.getElementById("Mcont").style.borderBottomColor = "#EE8F2F";
    // }else{this.document.getElementById("Mcont").style.borderBottomColor = "transparent";}
});