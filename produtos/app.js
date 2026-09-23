
/*-------------------------------------------------------------*/

/* Função da área de pesquisa*/

let div = $(".pesquisa"); // seleciona a div específica

$('.pesquisa').click(function(){
    $('.selection').slideToggle();
})

    
$("body").click(function (e) {
    if (div.has(e.target).length || e.target == div[0])
        return;
    $('.selection').slideUp();

});

/*----------------------------------------------------------------*/

/* Função de Scroll */
function move(area, sentido){

    let scroll_box = document.querySelector("#"+area);

    if (sentido === 'left'){
        scroll_box.scrollBy(-330,0);
    }
    else if (sentido === 'right'){
        scroll_box.scrollBy(330,0);
    }    
}