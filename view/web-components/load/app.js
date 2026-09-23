function typeWrite(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ' ';
    textoArray.forEach(function(letra, i){   
      
    setTimeout(function(){
        elemento.innerHTML += letra;
    }, 75 * i)

  });
}
const titulo = document.querySelector('load-screen').shadowRoot.querySelector('.l-title');
typeWrite(titulo);

const load = document.querySelector('load-screen').shadowRoot.querySelector('.load')

function endLoad(){
    load.style.display = 'none'
}


endLoad()