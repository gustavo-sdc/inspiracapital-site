//Mostra aleatoriamente o background inicial *Desativado por motivo de performance*
//var BackImg = Math.floor(Math.random() * 3);
//document.getElementById("Inicial").style.backgroundImage = "url(util/img/backgrounds/BackgroundInicial"+BackImg+".png)";
//Mostra aleatoriamente o background inicial



function OqFalamMostr(num){//Reogarniza os elementos na tela de acordo com qual usar
    Base=num;
    switch (num){
        case 0:
            Oqt0.style.transform = "translateX(0px)";
            Oqt1.style.transform = "translateY(-320px) translateX("+OqFalam.getBoundingClientRect().width+"px)";
            Oqt2.style.transform = "translateY(-640px) translateX("+OqFalam.getBoundingClientRect().width+"px)";

            Oqb0.style.backgroundColor = "#EE8F2F";
            Oqb1.style.backgroundColor = "#787878";
            Oqb2.style.backgroundColor = "#787878";

            break;
        case 1:
            Oqt0.style.transform = "translateX(-"+OqFalam.getBoundingClientRect().width+"px)";
            Oqt1.style.transform = "translateY(-320px) translateX(0px)";
            Oqt2.style.transform = "translateY(-640px) translateX("+OqFalam.getBoundingClientRect().width+"px)";

            Oqb0.style.backgroundColor = "#787878";
            Oqb1.style.backgroundColor = "#EE8F2F";
            Oqb2.style.backgroundColor = "#787878";
            break;
        case 2:
            Oqt0.style.transform = "translateX(-"+OqFalam.getBoundingClientRect().width+"px)";
            Oqt1.style.transform = "translateY(-320px) translateX(-"+OqFalam.getBoundingClientRect().width+"px)";
            Oqt2.style.transform = "translateY(-640px) translateX(0px)";

            Oqb0.style.backgroundColor = "#787878";
            Oqb1.style.backgroundColor = "#787878";
            Oqb2.style.backgroundColor = "#EE8F2F";
            break;
    }

}

OqFalamMostr(0);//Define o indice 0 como padrao

var Base = 0;
var RotacaoOqFalam;

function ZerarRotOqFalam(){//Redefini o contador para 0
    clearInterval(RotacaoOqFalam);
    
    RotacaoOqFalam = setInterval(() =>{
        Base ++;
        if(Base >= 3){
            Base=0;
        }
        OqFalamMostr(Base);
    }, 12000);

}
ZerarRotOqFalam();
//CARRO.. OQ FALAM SOBRE SÓS
//




// CONTATO
function  EnviarFormulário(){
    let btn = document.getElementById("EnviarContato");
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let mensagem = document.getElementById("mensagem").value;
    let url = "../../model/php/contato.php?nome="+nome+"&email="+email+"&mensagem="+mensagem;
    console.log(url);
    if(nome != "" & email != "" & mensagem!= ""){
        let request =  new XMLHttpRequest();
        request.open("GET",url,false);
        
        request.send();
        let resultado = JSON.parse(request.responseText);
        
        if(resultado.status==true){
            btn.style.backgroundColor = "green";
            btn.value = "Enviado";
            btn.onclick= null;
        }else{
            btn.style.backgroundColor = "red";
            btn.value = "ERROR";
            btn.onclick= null;
        }
    }else{
        document.getElementById("Aviso").innerHTML = "Preencha todos os campos";
    }
}

// CONTATO LP
function  EnviarFormulárioLP(){
    let btn = document.getElementById("EnviarContato");
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let numero = document.getElementById("numero").value;
    let cargo = document.getElementById("cargo").value;
    let empresa = document.getElementById("empresa").value;
    let url = "../../model/php/contato.php?nome="+nome+"&email="+email+"&numero"+numero+"&cargo"+cargo+"&empresa="+empresa;
    console.log(url);
    
    if(nome != "" & email != "" & numero!= "" & cargo !="" &empresa !=""){
        let request =  new XMLHttpRequest();
        request.open("GET",url,false);
        
        request.send();
        let resultado = JSON.parse(request.responseText);
        
        if(resultado.status==true){
            btn.style.backgroundColor = "green";
            btn.value = "Enviado";
            btn.onclick= null;
        }else{
            btn.style.backgroundColor = "red";
            btn.value = "ERROR";
            btn.onclick= null;
        }
    }else{
        document.getElementById("Aviso").innerHTML = "Preencha todos os campos";
    }
}



/*----------------------------------------------------------------------------------------------------------------------*/
let div = $('.pesquisa'); // seleciona a div específica

$('.pesquisa').click(function(e){
    $('.selection').slideToggle();
})

$("body").click(function (e) {
    if (div.has(e.target).length || e.target == div[0]  )return;
    $('.selection').slideUp();
});


let scroll, wlenth, scrollContainer, scrollVariable, clickConter, sliderVariation, scroll_box
slider = 200
scrollVariable = 0
clickCounter = 0


function move(area, sentido){
    scrollContainer = document.querySelector('.slider').clientWidth
    scroll_box = document.querySelector("#"+area);
    wlenth = window.innerWidth

    sliderVariation = (scrollContainer + 450) - wlenth
    clickCounter++
    
    if (scrollVariable <= sliderVariation){        
        if(sentido === 'right'){
            if(-scrollVariable < sliderVariation){
                scrollVariable = scrollVariable - slider
                scroll_box.style.transform='translateX('+scrollVariable+'px)';
            }
            else{
                scrollVariable = 0
                scroll_box.style.transform='translateX('+scrollVariable+'px)'
            }
        }
        else if(sentido === 'left'){
            if(scrollVariable >=0 ){
                scrollVariable = -(sliderVariation + 200)
                scroll_box.style.transform='translateX('+scrollVariable+'px)';
            }
            scrollVariable = scrollVariable + slider
            scroll_box.style.transform='translateX('+scrollVariable+'px)';
        } else{

        }
    } else{
        scrollVariable = 0
    } 
}