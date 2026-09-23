const container = document.querySelector('#container')
const images = document.querySelectorAll('.img')

let id = 0;

function carrosel(){
    //console.log(id)
    id++

    let width = window.screen.width
    let size = 0

    if(width >700){
        size = 2700
    } else{
        size = 2600
    }

    let scroll = size - width
    //console.log(scroll)

    let n_scroll = id * 100
    //console.log(n_scroll)


    if (n_scroll > scroll ){
       id = 0
       container.style.transform = `translateX(0px)`;  
    } else{
        //console.log('oi')
        container.style.transform = `translateX(-${n_scroll}px)`;  
    }

}

setInterval(carrosel, 700)