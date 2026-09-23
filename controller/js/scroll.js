/* Função de Scroll */
var next = document.querySelector("#next")
var back = document.querySelector("back")


function move(area, sentido){

    let scroll_box = document.querySelector("#"+area);

    if (sentido === 'left'){
        scroll_box.scrollBy(-330,0);
    }
    else if (sentido === 'right'){
        scroll_box.scrollBy(330,0);
    }    
}