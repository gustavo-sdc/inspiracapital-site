
let n = ''
let s = window.screen.width  

const header = document.querySelector('header')
const menu = document.querySelector('.cabecalho');
const b_menu = document.querySelector('.menu');
const head = document.querySelector('.header-top');
const list = document.querySelector('.list-options');

header.addEventListener('click', click)

function click(){           
    
    if (n == ''){
        if( s < 550){
            
            head.style.width = '90vw'
            menu.style.width = '90vw'
            menu.style.right = 'auto'
            menu.style.left = '5vw'

        }else if( s < 1000){

            head.style.width = '90vw'
            menu.style.width = '90vw'
            menu.style.right = '5vw'

        } else if( s < 1200){

            head.style.width = '50vw'
            menu.style.width = '50vw'
            menu.style.right = '5vw'
            menu.style.left = 'auto'

        } else if( s > 1200){

            head.style.width = '40vw'
            menu.style.width = '40vw'
            menu.style.right = '5vw'
            menu.style.left = 'auto'

        }                

    
        head.style.backgroundColor = 'white'
        head.style.borderRadius = '10px'

        b_menu.style.padding = '0%'

        list.style.display='flex'

        n = '1'
    }
    else{

        if( s < 550){
            head.style.width = '90vw'
            menu.style.width = '90vw'
            menu.style.right = 'auto'
            menu.style.left = '85vw'
            
        }else if( s < 1000){
            head.style.width = '90vw'
            menu.style.width = '90vw'
            menu.style.right = '5vw'

        } 

        head.style.backgroundColor = 'transparent'
        head.style.width = 'max-content'
        head.style.borderRadius = '10px'
        menu.style.width = 'max-content'

        list.style.display = 'none'
        n = ''
    }     
    
}


